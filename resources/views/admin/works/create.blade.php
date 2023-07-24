<x-admin-layout>
    @include('layouts.adminheader')

    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>الاقسام <span>/ </span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.works.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-black rounded-lg">العوده </a>
            </div>
            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form method="POST" action="{{ route('admin.works.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h4 class="title">اضف بيانات </h4>

                        <div class="col-md-7">
                            <label> القسم: </label>
                            <select  name="category_id" required class="form-control">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-md-7">
                            <label> وصف: </label>
                            <textarea class="form-control" name="description">

                            </textarea>

                            </select>
                        </div>
                        <div class="col-md-7">
                            <label> الصورة الاساسية: </label>
                            <input type="file" class="form-control" name="main_image">

                        </div>
                        <div id="other_data" class="tab-pane ">
                            <div class="div_phone_inputs ">

                                <div class="col-md-7">
                                    <label>عنوان الصورة: </label>

                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="name[]"
                                        type="text" placeholder="عنوان الصورة">

                                    <label> رفع الصورة: </label>

                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="link_youtube[]"
                                        type="text" placeholder="لينك اليوتيوب">


                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="image[]"
                                        type="file" placeholder="">

                                    <label> وصف الصورة: </label>

                                    <textarea class="form-control" data-parsley-class-handler="#lnWrapper"   name="desc[]" type="file" placeholder="">
                                            </textarea>

                                    <div class="clearfix"></div>
                                    <br>
                                    <a href="#" class="remove_input btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i></a>
                                    <br>

                                </div>

                            </div>

                            <br>

                            <a href="#" class="add_phone_input btn btn-info btn-sm"><i class="fa fa-plus"></i></a>

                        </div>
                        {{-- <label class="text-lg" for="image">Product Image2</label>
                                <p class="form-help-text mt-0"> Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" name="image2" id="image" type="file">
                                <br><br>
                                <label class="text-lg" for="image">Product Image3</label>
                                <p class="form-help-text mt-0"> Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" name="image3" id="image" type="file">
                                <br><br>
                                <label class="text-lg" for="image">Product Image4</label>
                                <p class="form-help-text mt-0"> Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" name="image4" id="image" type="file">
                                <br><br> --}}

                        {{-- <div class="col-lg-6 col-12 mb-30">
                                        <select name="categories" id="categories" class="form-control select2">
                                            <option value="categories">Status</option>
                                            <option value="publish">Publish</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div> --}}

                        {{-- <div class="col-12 mb-30" id="editor">
                                    <textarea class="form-control mt-8" name="description" placeholder="Product Description*"></textarea>
                                </div> --}}
                </div>



                <!-- Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap col mbn-10">
                        <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Save &
                            Publish</button>
                    </div>
                </div><!-- Button Group End -->

                </form>
            </div>

        </div><!-- Add or Edit Product End -->

    </div>

    </div><!-- Content Body End -->

    @include('layouts.adminfooter')


    <script type="text/javascript">
        var x = 2;
        $(document).on('click', '.add_phone_input', function(e) {
            e.preventDefault();
            $('.div_phone_inputs').append('<div>' +

                '<div class="col-md-7">' +
                '<lable>عنوان الصورة</lable>' +
                '<br>' +

                '<input type="text" name="name[]" class="form-control" placeholder="عنوان" /> ' +
                '<br>' +
                '<lable> لينك اليوتيوب</lable>' +
                '<br>' +

                '<input type="text" name="link_youtube[]" class="form-control" placeholder="لينك اليوتيوب" /> ' +
                '<br>' +
                '<lable> الصورة</lable>' +
                '<br>' +
                '<input type="file" name="image[]" class="form-control" placeholder="عنوان" /> ' +

                '<lable> وصف الصورة </lable>' +
                '<br>' +
                '<br>' +

                '<textarea   name="desc[]" class="form-control" placeholder="الوصف" /> ' +
                '</textarea>' +

                '</div>' +
                '<div class="clearfix"></div>' +
                '<br>' +
                '<a href="#" class="remove_input btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>' +
                '<br>' +
                '</div>');
            x++;
        });
        $(document).on('click', '.remove_input', function() {
            $(this).parent('div').remove();
            x--;
            return false;
        });
    </script>

</x-admin-layout>
