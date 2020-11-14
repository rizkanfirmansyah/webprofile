const base_url = window.location.origin + '/webprofile/public/'

function start_home(){
    $.ajax({
        type:'POST',
        // dataType:JSON,
        url:base_url + 'get_api/profile',
        success:function(res){
            let data = JSON.parse(res)
            let img = `<img src="${base_url}images/${data.image}" alt="alternative">`
            $('#header #name').text(data.name)
            $('title').text(data.name)
            $('#logo-company').attr('href', base_url)
            $('#logo-company').html(img)
            $('#header #information').text(data.information)
            $('#header #description').text(data.description)
        },
        error:function(err){
            console.log(err.statusText)
        }
    })
}

$(document).ready(function(){
    start_home()
})