@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <!-- JQUERY STEP -->
                <div class="wrapper">
                    <h2>Ajouter un guide :</h2>
                    <form action="{{ route('addGuide') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="wizard">
                            <!-- SECTION 1 -->
                            <h4></h4>
                            <section>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @error('name')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="name"><i class="fa-solid fa-user">  </i> Name:</label>
                                    <input type="text" name="name" class="form-control w-25" id="name"
                                        placeholder="Your Name" value="{{ old('name') }}" />

                                </div>
                                

                                @error('email')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="email"><i class="fa-solid fa-envelope">  </i> Email:</label>
                                    <input type="text" class="form-control w-25" name="email" id="email"
                                        placeholder="Your Email" value="{{ old('email') }}" />

                                </div>
                                
                                @error('tel')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="re-pass"><i class="fa-solid fa-phone">  </i> Telephone:</label>
                                    <input type="text" class="form-control w-25" name="tel" id="re_pass"
                                        placeholder="Your phone" value="{{ old('tel') }}" />

                                </div>
                                

                                @error('specialty')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="specialty"><i class="fa-solid fa-suitcase">  </i> Specialty:</label>
                                    <input type="text" class="form-control w-25" name="specialty" id="email"
                                        placeholder="Your specialty" value="{{ old('specialty') }}" />

                                </div>
                                
                                @error('password')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="pass"><i class="fa-solid fa-lock">  </i> Password:</label>
                                    <input class="form-control w-25" type="password" name="password" id="pass"
                                        placeholder="Password" value="{{ old('password') }}" />

                                </div>

                                <div class="mb-3">
                                    <button type="submit">submit</button>

                                </div>
                            </section> <!-- SECTION 2 -->


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection