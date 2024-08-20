@extends('layouts.landing')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 about_header">
            <h2 class="about-header-content">Contact Us</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 my-5">
            <form method="POST" action="{{route('submit_contact_form_page')}}">
                @csrf
                @if ($errors->any())
                <div class="">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <span class="alert alert-danger">{{ $error }}</span>
                        @endforeach
                    </ul>
                </div>
                @endif

                
                <div class="row col-md-8 mx-auto my-auto">
                    @if(session('success'))
                    <span class="alert alert-success mx-auto text-center">{{ session('success') }}</span>
                    @endif
                    <div class="form-group col-md-6 py-3">
                        <label for="firstname" class="label">First Name:</label>
                        <input class="form-control" name="firstname" type="text" placeholder="Enter your First Name" />
                    </div>
                    <div class="form-group col-md-6 py-3">
                        <label for="lastname" class="label">Last Name:</label>
                        <input class="form-control" name="lastname" type="text" placeholder="Enter your Last Name" />
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row col-md-8 mx-auto my-auto mt-1">
                    <div class="form-group col-md-6 py-3">
                        <label for="email" class="label">Email Address:</label>
                        <input class="form-control" name="email" type="text" placeholder="Enter your Email Address" />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 py-3">
                        <label for="phone" class="label">Phone Number:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+234</span>
                            </div>
                            <input class="form-control" required type="text" name="phone" placeholder="Enter your Phone Number" />
                        </div>

                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row col-md-8 mx-auto my-auto">
                    <div class="form-group col-md-12 col-sm-12 py-3">
                        <label for="address" class="label">Address:</label>
                        <textarea class="form-control" name="address" aria-placeholder="Enter your Physical Address" placeholder="Enter your Physical Address"></textarea>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button class="button mx-auto" name="contactbtn" type="submit"> Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection