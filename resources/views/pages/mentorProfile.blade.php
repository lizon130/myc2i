@php
    use Carbon\Carbon;
@endphp
@section('title')
Mentor Profile
@endsection
@extends('layouts.master')
@section('main-content')

<style>
.profile-container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
}

.mentor-image {
    border-radius: 50%;
    width: 100%;
    aspect-ratio: 1/1;
}

.card {
    background-color: #fff !important;
    border: 1px solid rgba(0, 0, 0, 0.125) !important;
    border-radius: 0.25rem !important;
    overflow: hidden !important;
    box-shadow: none !important;
}

@media (max-width: 564px) {
    .profile-container {
        grid-template-columns: 1fr;
        gap: 20px;
}

.mentor-image{
    width: 75%;
    margin-top: 20px;
}

.card-body{
    text-align: center;
}
}

.profile-child {

}
</style>

    <section>
        <h1 class="title">Mentor Profile</h1>
        <div class="d-flex justify-content-center flex-column align-items-center">

            <div class="profile-container">
                @foreach ($mentors as $mentor)
                <div class="profile-child card roboto-slab">
                    <div class="row g-0">
                        <div class="col-12 col-md-4 d-flex justify-content-center flex-column align-items-center px-2">
                            <img
                                src="{{ $mentor['imageUrl'] }}" class="img-fluid mentor-image" alt="...">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body h-100">
                                <div class="d-flex flex-column h-100">
                                    <div style="flex: 1;">
                                        <h5 class="card-title">{{ $mentor['firstName'] }}</h5>
                                        <p class="card-text">
                                            <p style="margin-bottom: 0;" class="i"><small>123 Main Street</small></p>
                                            <p style="margin-bottom: 0;" class="i"><small>Los Angeles, CA 90001</small></p>
                                            <p style="margin-bottom: 0;" class="i"><small>United States</small></p>
                                        </p>
                                    </div>
                                    <div>
                                        @php
                                    $date = Carbon::parse($mentor['createdDate'])->format('d-m-Y');
                                @endphp
                                        <p class="card-text"><small class="text-body-secondary">Joining Date:
                                                {{ $date }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>
    </section>
@endsection
