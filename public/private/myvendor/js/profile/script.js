const base_url = window.location.origin + '/webprofile/public/'

function timeout(id, param, loader, time, additional){
    if (param == 'show') {
        setTimeout(() => {
            $(loader).addClass('d-none')
            $(id).show()
            additional
        }, time); 
    } else {
        setTimeout(() => {
            $(loader).addClass('d-none')
            $(id).hide()
            additional
        }, time); 
    }
}

function start_profile(){
    $.ajax({
        type:'POST',
        // dataType:JSON,
        url:base_url + 'get_api/profile',
        success:function(res){
            let data = JSON.parse(res)
            console.log(data.name);
            $('#demo-form2 #name').val(data.name)
            $('#demo-form2 #information').val(data.information)
            $('#demo-form2 #description').val(data.description)
        },
        error:function(err){
            console.log(err.statusText)
        }
    })
}

function start_services()
{
    return new Promise(callBack => {
        $.ajax({
            type:'POST',
			url: base_url + 'get_api/services',
			success: function(res) {
                let data = JSON.parse(res)
                callBack(data)
			},
			error: function (err) {
				console.log(err.status + ' ' + err.statusText)
			}
		})
    })
}

    
$(document).ready(function(){
    start_profile()

    $('#demo-form2 .form-control').attr('readonly', true)
    $('#simpan').attr('disabled', true)
    $('#primary-service').addClass('x_content')

    $('#edit').on('click', function(){
        $('#demo-form2 .form-control').removeAttr('readonly')
        $('#simpan').removeAttr('disabled')
    })

    $('#simpan').on('click', function(){
        $('#demo-form2 .form-control').attr('readonly', true)
        $('#demo-form2').hide()
        $('#loadImg').removeClass('d-none')
        $.ajax({
            type:'POST',
            url:base_url + 'action/update/profile',
            data:{
               name : $('#demo-form2 #name').val(),
               description :$('#demo-form2 #description').val(),
               information: $('#demo-form2 #information').val(),
            },
            success:function(){
                start_profile()
            },
            error:function(err){
                alert(err.status + ' ' + err.statusText)
            }
        })
        timeout('#demo-form2', 'show', '#loadImg', 1000, $('#simpan').attr('disabled', true))
    })

    $('#uploadFileJS').on('change', function(){
        bacaGambar(this);
    })

    $('#primary-access-service').on('click', function() {
        $('#primary-service').hide()
        $('#secondary-service').hide()
        $('#primary-service').addClass('x_content')
        $('#loadImgService').removeClass('d-none')
        timeout('#primary-service', 'show', '#loadImgService', 1000, $('#secondary-service').removeClass('x_content'))
    })
    $('#secondary-access-service').on('click', async function() {
        $('#primary-service').hide()
        $('#secondary-service').hide()
        $('#secondary-service').addClass('x_content')
        $('#loadImgService').removeClass('d-none')
        let data = await start_services()
        let services = ''
        data.forEach(service => {
            services +=
                `<div class="col-md-55">
                <div class="thumbnail">
                    <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="${base_url}/images/${service.image}" alt="image">
                        <div class="mask">
                            <p>${service.title}</p>
                            <div class="tools tools-bottom" id="tools">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="javascript:void()" onclick="loadImage('${service.title}', '${service.description}', '${service.id}')"> <i class="fa fa-pencil"></i></a>
                                <a ><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <p>${service.description}</p>
                    </div>
                </div>
            </div> `
        });
        timeout('#secondary-service', 'show', '#loadImgService', 1000,  $('#primary-service').removeClass('x_content'))
        $('#col-services').html(services)
    })

    $('#simpanEdit').on('click', function() {
        var radio= $('input:radio[name=imagecheck]:checked').val();
        var nama = $('#title').val()
        var text = $('#textServices').val()
        var id = $('#idServices').val()
        var image = $(`#radioServices${radio}`).data('image')

        $.ajax({
            url : base_url +  'action/update/services',
            type : 'POST',
            data : {
                nama : nama,
                text : text,
                id : id,
                image : image,
            },
            success:function(res){
                alert('oke')
            },
            error:function(err){
                alert(err.status + ' ' + err.statusText)
            }
        })
    })


})

function bacaGambar(input) {
    if (input.files && input.files[0]) {
       var reader = new FileReader();
  
       reader.onload = function (e) {
           $('#gambar_nodin').attr('src', e.target.result);
       }
  
       reader.readAsDataURL(input.files[0]);
    }
 }

 async function loadImage(title, text, id){
     let data = await start_services()
     let image = ''
     idService = `<input id="idServices" value="${id}" type="hidden">`;
     data.forEach(images => {
         var clss = '';
         var checked = ''
         if(id != images.id){
            var clss = 'd-none';
        }else{
             var checked = 'checked'
         }
         image += `
         <div class="col-md-3 col-sm-3">
            <label class="mb-2"> 
                <input name="imagecheck" onclick="radioChanges($(this).val())" type="radio" id="radioServices${images.id}" value="${images.id}" data-image="${images.image}" class="position-absolute ml-1 mt-1 ${clss}" ${checked}>
                <figure class=" imagecheck-figure">
                    <img src="${base_url}images/${images.image}" alt="}" class="imagecheck-image">
                </figure>
            </label>
        </div>
         `
     });
     $('#imageList').html(image + idService)
     $('#title').val(title)
     $('#textServices').val(text)
     $('#editServices').modal('show')
 }

 function radioChanges(data){
        $('input[type=radio]').addClass('d-none')
        $('input[type=radio]').removeAttr('checked')
        $(`#radioServices${data}`).prop('checked', true)
        $(`#radioServices${data}`).removeClass('d-none')
 }
