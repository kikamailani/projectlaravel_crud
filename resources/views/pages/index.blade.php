@extends('layouts.templates')

@section('content')
    <style>
        /* Hero Section Styling */
        .hero {
            background-image: url('{{ asset('assets/images/background-pattern.png') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 50px 40px; /* Adjust padding for a balanced feel */
            border-radius: 15px; /* Consistent border-radius */
            position: relative;
            background: linear-gradient(135deg, #6c757d, #adb5bd); /* Gray gradient */
            overflow: hidden;
            margin: 0 auto; /* Center the hero section */
            max-width: 900px; /* Maximum width */
        }

        .overlay {
            background: rgba(108, 117, 125, 0.85); /* Slightly darker overlay */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px); /* Background blur for a modern look */
            border-radius: 15px; /* Adjusted to match the hero border */
        }

        .hero-text {
            position: relative;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 2.5rem; /* Increased font size */
            font-weight: 700; /* Consistent font weight */
            line-height: 1.2;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4); /* Adjusted shadow */
            margin-bottom: 15px; /* Increased margin */
        }

        .hero-text p {
            font-size: 1.1rem; /* Increased font size */
            margin-bottom: 25px; /* Increased margin */
            max-width: 600px; /* Increased max width */
            line-height: 1.5; /* Adjusted line height */
            color: rgba(255, 255, 255, 0.85); /* Slight transparency */
        }

        .hero-image img {
            border-radius: 15px; /* Adjusted to match hero border */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25); /* Adjusted shadow */
            max-width: 100%; /* Ensure the image is responsive */
        }

        .btn-data {
            border: 2px solid #ffffff;
            background-color: transparent;
            color: #fff;
            padding: 10px 25px; /* Increased padding */
            border-radius: 50px;
            font-size: 1.1rem; /* Slightly larger font size */
            transition: all 0.4s ease-in-out;
        }

        .btn-data:hover {
            background-color: #495057; /* Dark gray fill on hover */
            transform: translateY(-3px); /* Smooth hover movement */
        }

        @media (max-width: 768px) {
            .hero {
                padding: 30px; /* Increased padding for smaller screens */
                max-width: 90%; /* Allow for smaller widths on mobile */
                margin-left: 0; /* Align to the left */
            }

            .hero-text h1 {
                font-size: 1.8rem; /* Increased font size */
            }

            .hero-text p {
                font-size: 1rem; /* Increased font size */
            }

            .hero-image img {
                max-width: 100px; /* Adjusted image size */
            }
        }
    </style>

    <div class="container mt-5">
        <!-- Hero Section -->
        <div class="hero d-flex align-items-center justify-content-between flex-wrap position-relative"> <!-- Removed margin-left -->
            <div class="overlay"></div>
            <div class="hero-text">
                <h1 class="display-4">Selamat Datang di Data Jurusan</h1>
                <p>Disini kami akan membantu anda untuk mempermudah absen siswa terutma jurusan</p>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/images/wikrama.jpg') }}" alt="Wikrama" class="img-fluid"> <!-- Adjusted image size -->
            </div>
        </div>
    </div>
@endsection
