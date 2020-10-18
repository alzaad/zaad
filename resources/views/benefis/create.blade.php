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
                    <strong>أسم الاب</strong>
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
                        <option>سعودي</option>
                        <option>غير سعودي</option>
                    </select>
                    <?php
                    echo"<script language='javascript'>
                            $("#nationality_OPTION").change(function() {
                            if ($(this).val() == "سعودي") {
                                $(".saudi").show();
                            }

                            if ($(this).val() == "غير سعودي") {
                            $(".nonSaudi").show();
                            }
                            else {
                                $(".saudi", ".nonSaudi").hide();
                            }
                        });
                        </script>
                        ";
                    ?>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-secondary" href="{{ route('benefis.index') }}">الرجوع</a>
{{--                <div class="container">--}}
{{--                    <a class="btn btn-secondary" href="{{ route('benefis.otherinfo') }}">التالي</a>--}}
{{--                </div>--}}
                    <button type="submit" class="btn btn-primary">التالي</button>
            </div>
        </div>

    </form>
@endsection
