

<!--Creating Modal-->
<div id="Creating" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافة عضو &#x1F5EF;</h4>
            </div>
            <div class="modal-body" onLoad="initGeolocation();">
                <div id="response">

                </div>
                <form data-remote action="{{ route('poster.store') }}" method="POST" class="form-horizontal">
                    <div class="">
                        @csrf
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">&#x1F9D1; اسم الكامل</label>
                                <input type="text" class="form-control input-lg" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="">&#x1F5EF; اسم المستخدم</label>
                                <textarea class="form-control input-lg" name="nickname" id="" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                                &#x2197; <label for=""> احداثيات (latitude)</label>
                                <input id="latitude" class="form-control input-lg" name="latitude" />
                            </div>
                            <div class="form-group">
                                &#x2934;<label for=""> احداثيات (longitude)</label>
                                <input id="longitude" class="form-control input-lg" name="longitude" />
                            </div>
                            <div class="form-group">
                                <label for="">&#x1F646; نوع الاعلان</label>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pull-left">
                        <button type="submit" class="btn bttn-simple bttn-md bttn-primary">&#x1F4A5; اضافة</button>
                        <vk-button>MyButton</vk-button>
                    </div>
            </div>
            </form>
            <div class="clearfix"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--End Creating Modal-->