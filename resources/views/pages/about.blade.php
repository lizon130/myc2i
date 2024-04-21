@extends('layouts.master')

@section('title')
About
@endsection


@section('main-content')
<div>
    <section>
        <h1 class="title">About</h1>
    <img style="float: left; margin-right: 30px; margin-bottom: 20px; border-radius: 10px;" src="{{asset('assets/img/about.jpg')}}" alt="">
    <div style="font-size: 14px;" class="roboto-slab">
        <p>Welcome to Deen Institute of North America (DINA)! Our mission is to provide outreach and da’wah to people of other faiths, and we are dedicated to spreading knowledge and understanding about Islam.
        At DINA, we understand that many people have questions about Islam and may not have access to reliable sources of information. That's why we created MyC2i, an app available on the AppStore and Google Playstore, which provides a platform for both Muslims and non-Muslims to learn about Islam and connect with Muslim mentors.
        Through MyC2i, new Muslims, reverts, and converts to Islam can receive guidance and support from experienced Muslim mentors. Our mentors are trained to assist in various aspects of converting to Islam, including how to perform Islamic rituals and customs, understanding Islamic teachings and beliefs, and overcoming the challenges that come with changing one's faith.
        Whether you are new to Islam or have been a Muslim for many years, MyC2i is the perfect tool to help you stay connected to your faith and continue to grow in your knowledge and understanding of Islam. With MyC2i, you can:
        </p>
        <ul style="padding-left: 100px;">
            <li>Access a library of Islamic resources, including videos, articles, and podcasts</li>
            <li>Connect with Muslim mentors who can provide guidance and support</li>
            <li>Participate in online discussions and connect with a community of other Muslims and new Muslims</li>
            <li>Get answers to your questions about Islam from knowledgeable mentors and experts</li>
        </ul>

        <p>
            In addition to MyC2i, DINA also offers a range of outreach and educational programs, including seminars, workshops, and training sessions. We believe that by sharing knowledge and understanding about Islam, we can promote peace and harmony between people of different faiths.
        </p>
        <p>
            Thank you for visiting DINA. We hope that you will download MyC2i and join our community of learners and mentors. If you have any questions or would like to learn more about our programs, please don't hesitate to contact us.
        </p>
    </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset('assets/img/mission.png') }}" alt="">
            </div>
            <div class="col-md-9 d-flex justify-content-center flex-column align-items-center">
                <div>
                    <h1 class="title">Mission & Vision</h1>
                    <p class="roboto-slab" style="font-size: 14px;">The Deen Institute of North America envisions a world where individuals from all backgrounds have access to authentic and accurate information about Islam. We strive to promote a culture of respect and understanding between people of different faiths, and to create a welcoming and inclusive environment for those who seek to learn about Islam or convert to the faith. Our vision is to become a leading organization in the field of Islamic education and outreach, providing a comprehensive range of services that empower individuals to deepen their spiritual connection and grow as responsible members of society. Through our work, we hope to promote a message of peace, justice, and compassion, and to inspire positive change in the communities we serve.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
