@extends('layouts.main')
@section('content')
<main>
  <div class="container">
    <h1 class="car-details-page-title">{{ $car->name??'Lexus NX200t - 2016' }}</h1>
    <div class="car-details-region">{{ $car->location??'New Jersey - 2 days ago' }}</div>

    <div class="car-details-content">
      <div class="car-images-and-description">
        <div class="car-images-carousel">
          <div class="car-image-wrapper">
            <img
              src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}"
              alt=""
              class="car-active-image"
              id="activeImage"
            />
          </div>
          <div class="car-image-thumbnails">
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
            <img src="{{ asset('/storage/img/cars/Lexus-RX200t-2016/1.jpeg')??$car->image }}" alt="Car Image" />
          </div>
          <button class="carousel-button prev-button" id="prevButton">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 64px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5 8.25 12l7.5-7.5"
              />
            </svg>
          </button>
          <button class="carousel-button next-button" id="nextButton">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 64px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m8.25 4.5 7.5 7.5-7.5 7.5"
              />
            </svg>
          </button>
        </div>

        <div class="card car-detailed-description">
          <h2 class="car-details-title">Detailed Description</h2>
          <p>
            {{ $car->description['detail'] ?? 'Lorem Epsum' }}
          </p>
        
        </div>

        <div class="card car-detailed-description">
          <h2 class="car-details-title">Car Specifications</h2>

          <ul class="car-specifications">
            @foreach($car->specification as $feature => $enabled)
        <li>
            @if($enabled)
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    style="color: rgb(0, 192, 102)"
                >
                    <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                        clip-rule="evenodd"
                    />
                </svg>
                {{ $feature }}
            @else
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    style="color: red"
                >
                    <path
                        fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm3 10.5a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5h6Z"
                        clip-rule="evenodd"
                    />
                </svg>
                {{ $feature }}
            @endif
        </li>
    @endforeach
          </ul>
        </div>
      </div>
      <div class="car-details card">
        <div class="flex items-center justify-between">
          <p class="car-details-price">${{ $car->price??'25,000' }}</p>
          <button class="btn-heart">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 20px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
              />
            </svg>
          </button>
        </div>

        <hr />
        <table class="car-details-table">
          <tbody>
            @foreach ($car->description as $key => $value )
            <tr>
              <th>{{$key}}</th>
              <td>{{$value}}</td>
            </tr>
            @endforeach
            <tr>
              <th>Model</th>
              <td>NX200t</td>
            </tr>
            <tr>
              <th>Year</th>
              <td>2016</td>
            </tr>
            <tr>
              <th>Car Type</th>
              <td>SUV</td>
            </tr>
            <tr>
              <th>Fuel Type</th>
              <td>Hybrid</td>
            </tr>
          </tbody>
        </table>
        <hr />

        <div class="flex gap-1 my-medium">
          <img
            src="/img/avatar.png"
            alt=""
            class="car-details-owner-image"
          />
          <div>
            <h3 class="car-details-owner">John Smith</h3>
            <div class="text-muted">5 cars</div>
          </div>
        </div>
        <a href="tel:+995557123***" class="car-details-phone">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            style="width: 16px"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"
            />
          </svg>

          +995557123***
          <span class="car-details-phone-view">view full number</span>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection