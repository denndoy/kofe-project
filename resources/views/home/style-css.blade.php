<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600;700&display=swap');

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");

    :root {
        --primary-color: #0a1118;
        --primary-color-highlight: #233D54;
        --bs-body-font-family: 'Oswald', sans-serif;
        ;
    }

    html {
        scroll-behavior: smooth;
    }

    a {
        color: var(--primary-color);
    }

    a:hover {
        color: var(--primary-color);
    }

    /* Custom Container */
    .container-custom {
        width: 100%;
        padding: 0 1rem;
        margin: 0 auto;
    }

    @media (min-width: 1200px) {
        .container-custom {
            width: 1140px;
        }
    }

    @media (min-width: 1400px) {
        .container-custom {
            width: 1340px;
        }
    }

    @media (min-width: 1600px) {
        .container-custom {
            width: 1520px;
        }
    }


    /* Hero Section */
    .hero {
        position: relative;
        height: 100vh;
        background-color: var(--primary-color);
        overflow: hidden;
    }

    @media (min-width: 1400px) {
        .hero__heading {
            font-size: 3.2rem;
        }
    }


    .hero__video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translateX(-50%) translateY(-50%);
    }

    .hero__overlay {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background-color: var(--primary-color);
        opacity: .5;
        z-index: 1;
    }

    .hero__content {
        z-index: 1;
    }

    .hero__content-width {
        max-width: 540px;
    }

    .hero__scroll-btn {
        position: absolute;
        left: 50%;
        bottom: 30px;
        transform: translateX(-50%);
        z-index: 1;
        color: var(--bs-light);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
    }

    .hero__scroll-btn:hover {
        color: var(--bs-light);
        opacity: .8;
    }

    .hero__scroll-btn .bi {
        transition-delay: .8s;
        animation: bounce 1s infinite alternate;
    }

    @keyframes bounce {
        from {
            transform: translateY(0px);
        }

        to {
            transform: translateY(-6px);
        }
    }

    /* Step Section */
    .steps {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .steps__section-thumbnail {
        height: 240px;
        object-fit: cover;
        margin: 0 auto;
    }

    .steps__content-width {
        max-width: 456px;
        margin: 0 auto;
    }

    .steps--background {
        background-color: #fef8f9;
    }

    @media (min-width: 544px) {
        .steps {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .steps__section-thumbnail {
            height: auto;
        }
    }


    /* Footer */
    .footer .border-highlight {
        border-top: 1px solid var(--primary-color-highlight);
    }
</style>