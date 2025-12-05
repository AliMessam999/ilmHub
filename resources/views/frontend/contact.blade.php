@extends('layouts.app')

@section('content')
    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header rounded-0" data-bg-image="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title mt-5">Contact Us</h1>
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Contact Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Contact Top Section -->
    <div class="tj-contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".1s">
                            <i class="tji-box"></i>Contact info
                        </span>
                        <h2 class="sec-title title-anim">
                            <span>Reach</span> Out to Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-4 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-icon">
                            <i class="tji-location-3"></i>
                        </div>
                        <h3 class="contact-title">Our Location</h3>
                        <p>
                            House# 275C, Street#13, Chaklala Scheme III, Rawalpindi,
                            Punjab 46000
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-icon">
                            <i class="tji-envelop"></i>
                        </div>
                        <h3 class="contact-title">Email us</h3>
                        <ul class="contact-list">
                            <li>
                                <a href="mailto:info@cdigital.com.pk">info@cdigital.com.pk</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-icon">
                            <i class="tji-phone"></i>
                        </div>
                        <h3 class="contact-title">Call us</h3>
                        <ul class="contact-list">
                            <li>
                                <a href="tel:+92-51-5133790-2">+92-51-5133790-2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Contact Top Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section-2 section-bottom-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
                        <h3 class="title">
                            Feel Free to Get in Touch or Visit our Location.
                        </h3>
                        <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="name" value="{{ old('name') }}" required />
                                        <label class="cf-label">Full Name <span>*</span></label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="email" value="{{ old('email') }}" required />
                                        <label class="cf-label">Email Address <span>*</span></label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="phone" value="{{ old('phone') }}" required />
                                        <label class="cf-label">Phone number <span>*</span></label>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="subject" required>
                                                    <option value="">Choose an option</option>
                                                    <option value="Business Strategy" {{ old('subject') == 'Business Strategy' ? 'selected' : '' }}>Business Strategy</option>
                                                    <option value="Customer Experience" {{ old('subject') == 'Customer Experience' ? 'selected' : '' }}>Customer Experience</option>
                                                    <option value="Sustainability and ESG" {{ old('subject') == 'Sustainability and ESG' ? 'selected' : '' }}>Sustainability and ESG</option>
                                                    <option value="Training and Development" {{ old('subject') == 'Training and Development' ? 'selected' : '' }}>Training and Development</option>
                                                    <option value="IT Support & Maintenance" {{ old('subject') == 'IT Support & Maintenance' ? 'selected' : '' }}>IT Support & Maintenance</option>
                                                    <option value="Marketing Strategy" {{ old('subject') == 'Marketing Strategy' ? 'selected' : '' }}>Marketing Strategy</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="message" id="message" required>{{ old('message') }}</textarea>
                                        <label class="cf-label">Type message <span>*</span></label>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <span class="btn-text"><span>Submit Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                        <div id="map" aria-label="Map showing Dubai, Chicago, Lahore, Islamabad"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->

    <!-- start: Cta Section -->
    
    <!-- end: Cta Section -->

    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <style>
            #map {
                height: 100%;
                width: 100%;
            }
            .map-area {
                height: 100%;
            }
            .legend {
                background: white;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .legend .title {
                font-weight: bold;
                margin-bottom: 5px;
            }
            .legend .item {
                display: flex;
                align-items: center;
                margin: 3px 0;
            }
            .legend .marker-dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                margin-right: 8px;
                border: 1px solid #fff;
            }
            .legend .info {
                font-size: 11px;
                color: #666;
                margin-top: 8px;
                font-style: italic;
            }
            .city-label {
                background: rgba(255,255,255,0.9) !important;
                border: none !important;
                border-radius: 3px !important;
                font-size: 12px !important;
                font-weight: bold !important;
                padding: 2px 6px !important;
            }
        </style>
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            // Coordinates for the cities
            const cities = [
                {
                    name: "Dubai, UAE",
                    coords: [25.2048, 55.2708],
                    color: "#FF5733",
                    description: "Population (approx): 3.5M — Major global city in the UAE.",
                },
                {
                    name: "Chicago, USA",
                    coords: [41.8781, -87.6298],
                    color: "#337AFF",
                    description: "Population (approx): 2.7M — Major city in Illinois, USA.",
                },
                {
                    name: "Lahore, Pakistan",
                    coords: [31.5204, 74.3587],
                    color: "#33CC66",
                    description: "Population (approx): 11M — Cultural capital of Pakistan.",
                },
                {
                    name: "Islamabad, Pakistan",
                    coords: [33.6844, 73.0479],
                    color: "#FF33BB",
                    description: "Population (approx): 1.2M — Capital city of Pakistan.",
                },
            ];

            // Initialize map
            const map = L.map("map", {
                zoomControl: false,
                attributionControl: false,
            }).setView([30, 70], 5);

            // Add OpenStreetMap tiles
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: "&copy; OpenStreetMap contributors",
            }).addTo(map);

            // Custom colored circle markers and popup
            const markers = [];
            cities.forEach((city) => {
                const marker = L.circleMarker(city.coords, {
                    radius: 8,
                    fillColor: city.color,
                    color: "#fff",
                    weight: 1,
                    opacity: 1,
                    fillOpacity: 0.9,
                }).addTo(map);
                marker.bindTooltip(city.name, {
                    permanent: true,
                    direction: city.color == "#FF33BB" ? "top" : "bottom",
                    offset: city.color == "#FF33BB" ? [0, -10] : [0, 10],
                    className: "city-label shadow-lg",
                });

                marker.bindPopup(
                    `<strong>${city.name}</strong><br>${city.description}`
                );
                markers.push(marker);
            });

            // Fit map to markers with padding
            const group = L.featureGroup(markers);
            map.fitBounds(group.getBounds().pad(0.05));

            // Add scale control
            L.control.scale({ imperial: true, metric: true }).addTo(map);

            // Add legend control
            const legend = L.control({ position: "topright" });
            legend.onAdd = function () {
                const div = L.DomUtil.create("div", "legend");
                div.innerHTML = '<div class="title">Locations</div>';
                cities.forEach((c) => {
                    const item = document.createElement("div");
                    item.className = "item";
                    item.innerHTML = `<span class="marker-dot" style="background:${c.color}"></span><span>${c.name}</span>`;
                    div.appendChild(item);
                });
                const info = document.createElement("div");
                info.className = "info";
                info.innerHTML = "Click markers to view details. Scroll/drag to explore the map.";
                div.appendChild(info);
                return div;
            };
            legend.addTo(map);

            // Make map keyboard accessible: focus on map container
            document.getElementById("map").tabIndex = 0;
        </script>
    @endpush
@endsection