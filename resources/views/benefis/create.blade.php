

@extends('benefis.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div>
                <h2>البيانات الشخصية</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>المعذرة</strong> توجد مشكلة بالادخال<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('benefis.store') }}" method="POST">
        @csrf

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <div class="form-group">
                    <strong>الاسم الأول</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="الاسم الأول">
                    <strong>اسم الاب</strong>
                    <input type="text" name="second_name" class="form-control" placeholder="أسم الاب">
                    <strong>اسم العائلة</strong>
                    <input type="text" name="last_name" class="form-control" placeholder="اسم العائلة">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong>الجنس</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sex">
                        <option>أنثى</option>
                        <option>ذكر</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong>الجنسية</strong></label>
                    <select class="form-control" id="nationality_OPTION" name="nationality">
                        <option value="1" >سعودي</option>
                        <option value="2" >غير سعودي</option>
                    </select>
                </div>
{{--                style="visibility :hidden"--}}
                    <div class="form-group" id="Saudi" style="visibility :hidden" >
                        <strong>رقم الهوية الوطنية:</strong>
                        <input type="intger" name="id_num" class="form-control" placeholder="رقم الهوية الوطنية">
                        <strong>جهة الإصدار:</strong>
                        <input type="text" name="issuer" class="form-control" placeholder="جهة الإصدار">
                        <strong>مكان الميلاد:</strong>
                        <input type="text" name="birth_place" class="form-control" placeholder="مثال: بريده،عنيزة...">
                        <strong>تاريخ الميلاد:</strong>
                        <input type="date" name="birth_date" class="form-control" placeholder="تاريخ الميلاد">
                        <strong>تاريخ إصدار بطاقة الهوية:</strong>
                        <input type="date" name="issue_date" class="form-control" placeholder="تاريخ الإصدار">
                        <strong>تاريخ إنتهاء بطاقة الهوية:</strong>
                        <input type="date" name="exp_date" class="form-control" placeholder="تاريخ الإنتهاء">
                    </div>
                    <div class="form-group" id="nonSaudi"style="visibility :hidden" >
                        <strong>الجنسية:</strong>
                        <input type="text" name="nat_name" class="form-control" placeholder="مثال: مصري،سوري،هندي ...">
                        <strong>رقم جواز السفر:</strong>
                        <input type="text" name="passport_num" class="form-control" placeholder="رقم الجواز">
                        <strong>جهة إصدار جواز السفر:</strong>
                        <input type="text" name="issuer" class="form-control" placeholder="جهة إصدار الجواز">
                        <strong>تاريخ إصدار جواز السفر:</strong>
                        <input type="date" name="passport_date" class="form-control" placeholder="تاريخ إصدار الجواز">
                        <strong>رقم رخصة الإقامة:</strong>
                        <input type="intger" name="residence_num" class="form-control" placeholder="رقم رخصة الإقامة">
                        <strong>مكان إصدار رخصة الإقامة:</strong>
                        <input type="text" name="issuer_place" class="form-control" placeholder="مكان إصدار الإقامة">
                        <strong>تاريخ إنتهاء الإقامة:</strong>
                        <input type="date" name="res_exp_date" class="form-control" placeholder="تاريخ إنتهاء الإقامة">
                        <strong>المهنة المسجلة في رخصة الإقامة:</strong>
                        <input type="text" name="work_type" class="form-control" placeholder="المهنة">
                    </div>

                    <script>

                            $(document).on('change', '#nationality_OPTION', function( event ) {
                                selectedOption($(this).val());

                            });

                            function selectedOption(selectedOption) {
                                 if (selectedOption === a) {
                                    $('.Saudi').show();
                                } else {
                                    $('.Saudi').hide();
                                }
                                if (selectedOption === b) {
                                    $('.nonSaudi').show();
                                } else {
                                    $('.nonSaudi').hide();
                                }
                            }
                    </script>
//document.getElementById("myP").style.visibility = "hidden";
//https://www.w3schools.com/jsref/prop_style_visibility.asp


            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-secondary" href="{{ route('benefis.index') }}">الرجوع</a>
                <button type="submit" class="btn btn-primary">التالي</button>
            </div>
        </div>
    </form>
@endsection

