@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fblr2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/57883134_328664584732646_7252100516073701376_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net&oh=01e67dc60c85d5532cf1ffbef2344083&oe=5E7FED5E" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username  }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>34</strong> posts</div>
                <div class="pr-5"><strong>309</strong> followers</div>
                <div class="pr-5"><strong>263</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title  }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fblr2-1.fna.fbcdn.net/v/t51.2885-15/e35/75458059_193034398548309_6670294561319117950_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net&_nc_cat=109&oh=f8c11cf259fb152126f33dc955ca6544&oe=5E8DDE0B" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr2-1.fna.fbcdn.net/v/t51.2885-15/e35/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net&_nc_cat=111&oh=04a756458034d8bdda5cba4e71f07094&oe=5EAD0D09" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr2-1.fna.fbcdn.net/v/t51.2885-15/e35/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=Wri_kIZRuKkAX9kQUPG&oh=0c5e73e771272d1275e7ea935c9ba69a&oe=5E8FCE10" class="w-100">
        </div>
    </div>
</div>
@endsection
