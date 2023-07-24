<x-admin-layout>
    @include("layouts.adminheader")

                <!-- Content Body Start -->
                <div class="content-body">

                    <!-- Page Headings Start -->
                    <div class="row justify-content-between align-items-center mb-10">

                        <!-- Page Heading Start -->
                        <div class="col-12 col-lg-auto mb-20">
                            <div class="page-heading">
                                <h3>لوحة التحكم <span>/ اضافة موضوع جديد</span></h3>
                            </div>
                        </div><!-- Page Heading End -->

                    </div><!-- Page Headings End -->

                    <div class="row">
                        <div class="flex justify-end m-2 p-2">
                               <a href="{{ route('admin.contects.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-black rounded-lg"> اضافة صوره جديده</a>
                        </div>
                         <!--Manage Product List Start-->
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle">
                                    <thead>
                                        <tr>
                                            <th> ID</th>
                                            {{-- <th>الصوره</th> --}}
                                            <th>عنوان الصوره</th>
                                            <th>الوصف</th>
                                            <th></th>
                                            <th>الاجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contects as $contect)
                                            <tr>
                                                <td>{{$contect->id}}</td>
                                                {{-- <td>
                                                     <img src="{{ asset($contect->image) }}" alt="image" class="w-16 h-16 rounded-circle">
                                                    @if ($contect->image2)
                                                        <img src="{{ asset($contect->image2) }}" alt="image2" class="w-16 h-16 rounded-circle">
                                                        @endif
                                                    @if ($contect->image3)
                                                        <img src="{{ asset($contect->image3) }}" alt="image3" class="w-16 h-16 rounded-circle">
                                                        @endif
                                                    @if ($contect->image4)
                                                    <img src="{{ asset($contect->image4) }}" alt="image4" class="w-16 h-16 rounded-circle">
                                                    @endif
                                                </td> --}}

                                                <td>{{$contect->name}}</td>
                                                <td class="w-14">{!! $contect->description !!}</td>
                                                <td></td>
                                                <td>
                                                    <div class="table-action-buttons flex space-x-4">
                                                        {{-- update --}}

                                                        <a class="edit button button-box button-xs button-info ml-2" href="{{ route('admin.contects.edit', $contect->id)}}"><i class="zmdi zmdi-edit"></i></a>

                                                        {{-- DELETE --}}
                                                        <form
                                                            method="POST"
                                                            action="{{ route('admin.contects.destroy', $contect->id)}}"
                                                            onsubmit="return confirm('Are You sure {{ Auth::user()->name }}?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Manage Product List End-->

                    </div>

                </div><!-- Content Body End -->

    @include('layouts.adminfooter')
        </x-admin-layout>