<div class="bg-danger">
    <form action="/newslatter" method="post">
        @csrf
        <div class="w-100 d-md-flex align-item-center" style="min-height: 100px;">
            <div class="col-md-4 d-md-flex justify-content-center align-items-center">
                <p class="mx-4 text-uppercase h4 text-white fw-bold"><span class="text-dark d-block">{{__("Abonnez-vous")}}</span>

                    {{__("pour les
                    notifications")}}
                </p>
            </div>
            <div class="col-md-4 px-4 d-flex justify-content-center align-items-center leftMenuC">
                <div class="col-md-12">
                    <input type="text" name="newslatter" id="" class="form-control" placeholder="{{__('Votre Email adresse')}}">
                    <input type="text" name="newslatterAuth" id="" value="1" hidden>
                </div>
                <div class="">
                    <button type="submit" class="btn text-white btn-jew ms-2 d-md-none d-lg-none my-2"><span>{{__("Abonnez-vous")}}</span><span class=" bi-chevron-right"></span></button>
                </div>
            </div>
            <div class="col-4 d-none bg-dark d-md-flex d-lg-flex justify-content-start align-items-center ps-5 rightMenuC">
                <button class="btn text-white btn-jew ms-5"><span>{{__("Abonnez-vous")}}</span><span class="bi-chevron-right"></span></button>
            </div>
        </div>
    </form>
    <div style="background: #191f23;" class="text-light">
        <div class="container-fluid pt-4">
            <div class="col-md-10 mx-auto py-md-4">
                <div class="row w-100 mx-auto">
                    <div class="col-md-4 card" style="background: none; border: none">
                        <img src="{{asset('assets/imgs/logojw.png')}}" alt="logo jwtrading" class="card-img-top w-50">
                        <div class="card-body mx-0 px-0">
                            <p class="text-justify">
                                {{ $apropos}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold">
                            {{__("LES GARANTIES")}}
                        </h5>
                        <p>
                        <ul class="list-unstyled">
                            <li class="border-bottom border-2 p-2 h6"> <span class="bi-chevron-right"></span> {{__("Rapide et facile")}}</li>
                            <li class="border-bottom border-2 p-2 h6"> <span class="bi-chevron-right"></span> {{__("Une inspection Transparente")}}</li>
                            <li class="border-bottom border-2 p-2 h6"> <span class="bi-chevron-right"></span> {{__("Offert immédiatement")}}</li>
                            <li class="border-bottom border-2 p-2 h6"> <span class="bi-chevron-right"></span> {{__("Formalités administratives sans tracas")}}</li>
                            <li class="border-bottom border-2 p-2 h6"> <span class="bi-chevron-right"></span> {{__("Transactions de paiement sécurisées")}}</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold">
                            {{__("CONTACT")}}
                        </h5>
                        <p>
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="bi-person-lines-fill text-white bi--xl"></span>
                                <div class="ms-2">
                                    <h6 class="fw-bold p-0 m-0">
                                        {{ __("Adresse") }}
                                    </h6>
                                    <p class="text-muted small">
                                        {{$adresse}}
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <span class="bi-telephone-inbound-fill text-white bi--xl"></span>
                                <div class="ms-2">
                                    <h6 class="fw-bold p-0 m-0">
                                        {{ __("Phone") }}
                                    </h6>
                                    <p class="text-muted small ">
                                        @php
                                        $i=0;
                                        @endphp
                                        @foreach ($phones as $phone)
                                        @if ($i%2!=0)
                                        {{ ","}}
                                        @endif
                                        <a href="tel:{{$phone}}" class="text-muted text-nowrap">{{$phone}}</a>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <span class="bi-envelope text-white bi--xl"></span>
                                <div class="ms-2">
                                    <h6 class="fw-bold p-0 m-0 text-uppercase">
                                        {{ __("Email") }}
                                    </h6>
                                    <p class="text-muted small">
                                        <a href="mailto:{{ $email}}" class="text-muted">{{ $email}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mx-auto d-flex justify-content-center">
                <p>
                    <span class="bi-facebook mx-1"></span>
                    <span class="bi-twitter mx-1"></span>
                    <span class="bi-linkedin mx-1"></span>
                </p>
                <div class="select d-inline ms-3">
                    <div class="input-group mb-3 d-inline">
                        <select onchange="changeLanguage(this.value)" id="langue" name="langue" class="form-control form-select d-inline-block text-muted p-0 m-0" style="min-width: max-content; background: none; height: max-content;" aria-label="">
                            <option value="">🇫🇷🇬🇧 language</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='fr'?'selected':''):''}} value="fr">🇫🇷 fr</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='us'?'selected':''):''}} value="en">🇬🇧 en</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" col-md-10 mx-auto border-top small bg">
                <footer class="py-3 container d-flex justify-content-center">
                    <p class="text-center text-muted m-0 d-inline">
                        copyritht&copy;2022
                        <a href="/login">jewtrading</a>
                        | all rigths reserved | Power by
                        <span><a href="http://subnetcongo.net">subnet Congo</a></span>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</div>
<script>
    function changeLanguage(lang) {
        window.location = '{{url("change-language")}}/' + lang;
    }
</script>
