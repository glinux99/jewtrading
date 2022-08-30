@extends( (Auth::user()->hasRole('client')) ? 'layouts.pages' : 'layouts.admin')
@section('content')
<section class="main-content col-md-10 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">
            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang('Profile')</h1>
                    </div>
                    <div class="col-md-6 text-md-right">

                        <a href="{{route('admin.staff.profile')}}" class="btn btn-circle btn-info">
                            <span>@lang('Modifier')</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">@lang("Mon profile Actuel")</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="image">
                            <img class="w-100" src="https://t3.ftcdn.net/jpg/03/98/71/44/360_F_398714419_zsvtZUViipWgjjHDaUsAtMpV03YPB9J1.jpg" alt=" ..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <style>
                                    .avatar:hover {
                                        transform: scale(1.2);
                                        transition: transform 1s 0s ease;
                                    }
                                </style>
                                <a href="{{ asset(Session('picprofile'))}}">
                                    <img class="avatar border-gray" src="{{ asset(Session('picprofile'))}}" alt="Profile" />
                                    <h4 class="title text-center">{{ Auth::user()->name }}<br />
                                        <small>{{ auth()->user()->getRoleNames()->first()}}</small>

                                    </h4>
                                </a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="description text-center">{!! Auth::user()->description!!}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center py-3">
                            {{__("Profile design")}} {{Config("app.name")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
