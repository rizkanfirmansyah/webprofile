<style>
    .imagecheck-image {
        width: 100px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="editServices" tabindex="-1" role="dialog" aria-labelledby="editServicesLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServicesLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="item form-group">
                        <label class="mr-2 col-form-label col-md-6 col-sm-6 label-align text-capitalize" for="title">Title<span class="required"></span>
                        </label>
                        <div class="col-sm-12">
                            <input type="text" id="title" name="title" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="description" class="text-capitalize col-form-label col-md-6 col-sm-6 label-align">description</label>
                        <div class="col-sm-12">
                            <textarea id="textServices" name="textServices" rows="5" class="form-control" type="text" name=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center" id="imageList">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="simpanEdit">Save changes</button>
            </div>
        </div>
    </div>
</div>