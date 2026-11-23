@extends('layouts.profile')

@section('title', 'Biodata Hanggara')

@section('content')
    <main class="profile-card">
        <div class="avatar" aria-hidden="true">{{ $profile['initial'] }}</div>
        <p class="eyebrow">PROFIL PERSONAL</p>
        <h1>{{ $profile['name'] }}</h1>
        <p class="description">{{ $profile['description'] }}</p>
        <section class="details" aria-label="Informasi biodata">
            @foreach ($profile['details'] as $label => $value)
                <div class="detail">
                    <span>{{ $label }}</span>
                    <strong>{{ $value }}</strong>
                </div>
            @endforeach
        </section>
    </main>
@endsection
