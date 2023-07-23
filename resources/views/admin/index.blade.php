<x-admin-layout>
    {{-- <x-slot name="header">

    </x-slot> --}}

    @include('layouts.adminheader')


    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>لوحة التحكم <span>/ الاحصائيات</span></h3>
                </div>
            </div><!-- Page Heading End -->

            {{-- <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <input type="text" class="form-control input-date-predefined">
                </div>
            </div><!-- Page Button Group End --> --}}

        </div><!-- Page Headings End -->

        <!-- Top Report Wrap Start -->
        <div class="row">
            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>اجمالي الزيارات</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>اليوم</h5>
                        <h2>100</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 92%;"></div>
                        </div>
                        <p>92% معدل زيادة الزوار</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            {{-- <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Product Sold</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Today</h5>
                        <h2>$00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 98%;"></div>
                        </div>
                        <p>98% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Order Received</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Today</h5>
                        <h2>$00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 88%;"></div>
                        </div>
                        <p>88% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End -->

            <!-- Top Report Start -->
            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                <div class="top-report">

                    <!-- Head -->
                    <div class="head">
                        <h4>Total Revenue</h4>
                        <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <h5>Today</h5>
                        <h2>$00</h2>
                    </div>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="progess">
                            <div class="progess-bar" style="width: 76%;"></div>
                        </div>
                        <p>76% of unique visitor</p>
                    </div>

                </div>
            </div><!-- Top Report End --> --}}
        </div><!-- Top Report Wrap End -->

        <div class="row mbn-30">


            <!-- Recent Transaction Start -->
            <div class="col-12 mb-30" dir="rtl">
                <div class="box">
                    <div class="box-head" dir="rtl">
                        <h4 class="title">رسائل العملاء</h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-vertical-middle table-selectable">

                                <!-- Table Head Start -->
                                <thead>
                                    <tr>
                                        <!--<th class="selector h5"><button class="button-check"></button></th>-->
                                        <th><span> الاسم</span></th>
                                        <th><span> البريد الالكتروني </span></th>
                                        <th><span> رقم الهاتف</span></th>
                                        <th><span> نص الرساله</span></th>
                                        <th></th>
                                    </tr>
                                </thead><!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    @foreach ($massage as $massage)


                                    <tr>
                                        <td>{{ $massage->name }}</td>
                                        <td>{{ $massage->email }}</td>
                                        <td>{{ $massage->phone }}</td>
                                        <td>{{ $massage->massage }}</td>
                                        <td>
                                        <div class="table-action-buttons flex space-x-4">

                                            {{-- DELETE --}}
                                            <form
                                                method="POST"
                                                action="{{ route('massage.destroy', $massage->id)}}"
                                                onsubmit="return confirm('Are You sure {{ Auth::user()->name }}?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></button>
                                            </form>

                                        </div>
                                    </td>
                                    </tr>

                                    @endforeach
                                </tbody><!-- Table Body End -->

                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Recent Transaction End -->
        </div>

    </div><!-- Content Body End -->

@include('layouts.adminfooter')

</x-admin-layout>
