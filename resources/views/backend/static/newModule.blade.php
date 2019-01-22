@extends("layouts.backend")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(isset($modul))
                    {{$modul->name}}
                @else
                    Yeni Module
                @endif
                <small>Module Sayfalar</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label" >Adı</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Adı" value="@if(isset($modul)) {{$modul->name}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="page_id" class="col-sm-2 control-label">Select</label>
                                <div class="col-sm-10">
                            <select class="form-control" id="page_id" name="page_id">
                                <option value="" selected>Sayfa Seçiniz</option>
                                @foreach($pages as $page)
                                <option value="{{$page->id}}">{{$page->name}}</option>
                                    @endforeach

                            </select>
                        </div>
                            </div>
                                <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Başlık</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Başlık" value="@if(isset($modul)) {{$modul->title}} @endif"">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Açıklama</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="description" placeholder="Açıklama" value="@if(isset($modul)) {{$modul->description}} @endif">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <a href="{{route("backend.static.module.show")}}" type="button" class="btn btn-default" >İptal</a>
                            <a type="button" class="btn btn-info pull-right" id="submitButton" href="{{route("backend.static.module.show")}}">Kaydet</a>
                            <div>
                                <div align="center">
                                <a href="{{route("backend.static.newPageShow")}}" class="btn btn-primary" id="newSetting">Static Sayfa Ekle</a><div>
                                        <div align="center">
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </section>
    </div>
    </section>
@endsection

@push("customJs")
    <script>
        $("#submitButton").click(function (){
                    @if(isset($module))
            var url = "{{route("backend.static.pageEdit",["slug"=>$page->slug])}}";
                    @else
            var url =   "{{route("backend.static.module.newModuleCreate")}}";
            @endif
            $.ajax({
                type : "post",
                url : url,
                data : {
                    _token : "{{csrf_token()}}",
                    name : $("#name").val(),
                    title : $("#title").val(),
                    description : $("#description").val(),
                    page_id : $("#page_id").val()
                },

                success: function (response){

                    console.log(response);
                },

                error:function (response) {

                    console.log(response)
                }

            });
        })
    </script>
@endpush

@push("customCss")

@endpush
