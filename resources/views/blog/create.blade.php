@extends('layouts.app')
@section('content')


    <form class="container">

    <div class="row">
        <div class="col-md-12">
            <input type="text" class="form-control" placeholder="title">

        </div>

    </div>
        <p>Body</p>
        <div class="card card-outline card-info">
            <div class="card-header">

                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                <textarea  class="textarea" placeholder="Place some text here"
                          style="width: 100%; height:500px;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

            </div>
        </div>





        <div class="card card-outline card-info">
            <div class="card-header">

                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">

                <div class="row">
                    <div class="col-md-6">
                        <p>Featured Image
                        <button onclick="selectImage()" type="button" class="btn btn-primary mb-3">Select image</button>
                        </p>
                        <input accept="image/png, image/jpeg, image/bmp" onchange="select_image(event)" name="featured_image" id="featured_image" type="file" style="display: none;">
                        <img id="f_image" src="https://tnthomeimprovements.com/wp-content/uploads/2019/08/placeholder.png" class="img img-fluid" alt="featured image" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-control-label">Category</label>
                        <select class="form-control">


                        </select>

                    </div>


                </div>



            </div>
        </div>

    </form>


    <script>

        function selectImage() {
           let fm = document.getElementById('featured_image');

                fm.click();


        }
        function select_image(e) {
           const fr = new FileReader();
            fr.readAsDataURL(e.target.files[0]);


            fr.onload =function(){

                document.getElementById('f_image').src=fr.result;
            };


        }

    </script>



@endsection
