<x-admin-layout>
    @include('layouts.adminheader')

                <!-- Content Body Start -->
                <div class="content-body">

                    <!-- Page Headings Start -->
                    <div class="row justify-content-between align-items-center mb-10">

                        <!-- Page Heading Start -->
                        <div class="col-12 col-lg-auto mb-20">
                            <div class="page-heading">
                                <h3>لوحة التحكم <span>/ التعديل علي بيانات الصوره</span></h3>
                            </div>
                        </div><!-- Page Heading End -->

                    </div><!-- Page Headings End -->

                    <div class="row">
                        <div class="flex justify-end m-2 p-2">
                            <a href="{{ route('admin.baners.index')}}"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-black rounded-lg">العوده </a>
                        </div>
                        <!-- Add or Edit Product Start -->
                        <div class="add-edit-product-wrap col-12">

                            <div class="add-edit-product-form">
                                <form method="POST" action="{{ route('admin.baners.update', $baners->id)}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <h4 class="title">اضف بيانات الصوره</h4>

                                    <div class="row flex flex-wrap ">

                                        <div class="col-lg-4 col-12  mb-30"><input class="form-control" name="name"
                                                id="name" type="text" value="{{$baners->name}}" placeholder="العنوان"></div>

                                    <label class="text-lg"  for="image">يلزم تغيير الصوره</label>
                                    <div>
                                        <img class="w-90 h-85" src="{{ Storage::url($baners->image)}}" alt="image">
                                    </div>
                                    <p class="form-help-text mt-0 "> يفضل الا يزيد حجم الصوره عن 1.5mB</p>
                                    <input class="file-pond col-lg-4" name="image" id="image" type="file" >
                                    <br><br>
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

                                    <div class="col-12 row-50 mb-30">
                                        <textarea class="form-control mt-8" name="description" id="editor" placeholder="{!! $baners->description !!}  "></textarea>
                                    </div>
                                    {{-- <div class="col-12 mb-30" id="editor">
                                        <textarea class="form-control mt-8" name="description" id="editor" placeholder="Product Description*"></textarea>
                                    </div> --}}
                            </div>



                            <!-- Button Group Start -->
                            <div class="row">
                                <div class="d-flex flex-wrap col mbn-10">
                                    <button type="submit"
                                        class="button button-outline button-primary mb-10 ml-10 mr-0">Edite</button>
                                </div>
                            </div><!-- Button Group End -->

                            </form>
                        </div>

                    </div><!-- Add or Edit Product End -->

                </div>

            </div><!-- Content Body End -->

    @include('layouts.adminfooter')
    </x-admin-layout>
