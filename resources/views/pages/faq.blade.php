@extends('layouts.master')
@section('title')
    FAQ
@endsection
@section('main-content')
<style>
    .accordion-container {
        width: 50%;
        margin: 0 auto;
    }

    .accordion {
    --bs-accordion-bg: hsl(0, 1%, 84%);
    --bs-accordion-color: #441a05;
    --bs-accordion-border-color: var(--bs-border-color);
    --bs-accordion-border-width: 1px;
    --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
    --bs-accordion-btn-padding-x: 1.25rem;
    --bs-accordion-btn-padding-y: 1rem;
    --bs-accordion-btn-color: #212529;
    --bs-accordion-btn-bg: var(--bs-accordion-bg);
    --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath d='M7 4V7H4v2h3v3h2V9h3V7H9V4H7z'/%3e%3c/svg%3e");
    --bs-accordion-btn-icon-width: 1.25rem;
    --bs-accordion-btn-icon-transform: rotate(-180deg);
    --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
    --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath d='M4 8h8v1H4V8z'/%3e%3c/svg%3e");
    --bs-accordion-btn-focus-border-color: #86b7fe;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem transparent;
    --bs-accordion-body-padding-x: 1.25rem;
    --bs-accordion-body-padding-y: 1rem;
    --bs-accordion-active-color: black;
    --bs-accordion-active-bg: #DB9E30;
}


.accordion-flush .accordion-item {
    margin-bottom: 10px;
}



</style>
    <section>
        <h1 class="title">FAQ</h1>
        <div class="accordion accordion-flush roboto-slab accordion-container" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is Islam?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Islam is a monotheistic religion that was founded in the 7th century in the Arabian Peninsula by the Prophet Muhammad (peace be upon him). Islam is based on the belief in one God (Allah), and the Quran is the holy book of Islam.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Who is the Prophet Muhammad?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The Prophet Muhammad (peace be upon him) is the last prophet in Islam. He was born in Mecca in the Arabian Peninsula in 570 CE and began receiving revelations from Allah at the age of 40. He is considered to be the final messenger of God in Islam.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        What is the Quran?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The Quran is the holy book of Islam. It contains the teachings of Allah as revealed to the Prophet Muhammad (peace be upon him) over a period of 23 years. Muslims believe that the Quran is the literal word of Allah and is the ultimate source of guidance for all humanity.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        What are the Five Pillars of Islam?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The Five Pillars of Islam are the basic acts of worship that are mandatory for all Muslims. They are: (1) Shahada (declaration of faith), (2) Salat (prayer), (3) Zakat (charity), (4) Sawm (fasting), and (5) Hajj (pilgrimage to Mecca).</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        What is Zakat?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Zakat is the third pillar of Islam, which involves giving a portion of one's wealth to the needy. It is considered a form of purification and is obligatory for all Muslims who have the financial means to do so.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        What is Hajj?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Hajj is the pilgrimage to Mecca that is mandatory for all Muslims who are physically and financially able to undertake it. It takes place during the Islamic month of Dhu al-Hijjah and involves a series of rituals, including circling the Kaaba, standing at the plain of Arafat, and performing symbolic stoning of the devil.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        What is Halal?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Halal refers to anything that is permissible according to Islamic law. It applies to food, clothing, and other aspects of daily life, and is based on the teachings of the Quran and the Sunnah (example) of the Prophet Muhammad (peace be upon him).</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        What is Haram?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Haram refers to anything that is forbidden according to Islamic law. It applies to food, clothing, and other aspects of daily life, and is based on the teachings of the Quran and the Sunnah of the Prophet Muhammad (peace be upon him).</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 style="border-radius: 100px;" class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        What is the importance of prayer in Islam?
                    </button>
                </h2>
                <div style="background: #c2750a5c;" id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Prayer is one of the Five Pillars of Islam and is considered to be a fundamental act of worship. It is a means of communication between a Muslim and Allah, and helps to strengthen one's faith and increase mindfulness of God in daily life.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
