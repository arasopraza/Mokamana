@extends('layouts/main')

@section('title', 'Mokamana')

@section('content')
<div class="galeri-container">
    <h2>Buat kenangan liburanmu</h2>
    <p>kami bantu menyimpan semua kenangan liburan anda disini</p>
    <div class="filter-container">
        <div class="category-head">
            <ul>
                <div class="category-title active-filter" id="all">
                    <li>Semua</li>
                </div>
                <div class="category-title" id="alam">
                    <li>Alam</li>  
                </div>
                <div class="category-title" id="pantai-laut">
                    <li>Pantai & laut</li>
                </div>
                <div class="category-title" id="taman">
                    <li>Taman</li>
                </div>
                <div class="category-title" id="gedung-kota">
                    <li>Gedung & kota</li>
                </div>
                <div class="category-title" id="malam">
                    <li>Potret malam</li>
                </div>
            </ul>
        </div>

        <div class="posts-collect">
            <div class="posts-main-container">
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://image.freepik.com/free-photo/family-vacation-parents-children-sea-shore-summer-day_155003-7180.jpg" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://image.freepik.com/free-photo/relaxed-short-haired-woman-posing-beach-outdoor-shot-blithesome-young-lady-sunglasses-enjoying-vacation_197531-8729.jpg" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/group-three-friends-lying-retro-bus-sandy-beach_247147-36.jpg?size=664&ext=jpg&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/female-tourists-spread-their-arms-held-their-wings_1150-7462.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/tourism-travel-adventure-stylish-young-hipster-sitting-stone-with-bare-feet-turning-his-head-back-see-amazing-waterfall_273609-1867.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/sensual-tender-girl-sitting-swing-wearing-white-dress-girl-has-her-eyes-closed-she-has-long-dark-hair-she-has-bracelets-her-arm-leg-swing-is-beach-with-green-palms_197531-277.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai &laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/modern-buildings-with-glass-windows-cloudy-sky-during-sunset-evening_181624-21988.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://image.freepik.com/free-photo/panoramic-shot-night-skyline-with-light-reflections-water_181624-27025.jpg" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://image.freepik.com/free-photo/blonde-woman-posing-photo-road-forest-caucasian-man-holding-camera-shooting-nature-two-happy-people-trekking-with-backpacks-tourism-adventure-summer-vacation-concept_74855-11540.jpg" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/wooden-bench-park-filtered-image-processed-vintage-effe_1232-2317.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://image.freepik.com/free-photo/girl-sitting-grass-with-beautiful-view-florence_181624-27092.jpg" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/aerial-view-young-woman-swimming-pink-swim-ring_159067-1.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/portrait-asian-woman-rock-with-opened-arms-sunset-around-ocean-vacation_74190-13330.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/boatman-punting-boat-river-arashiyama-autumn-season-along-river-kyoto-japan_335224-26.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/city-park_1127-3322.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/beautiful-woman-jogger-outdoor-living-healthy-lifestyle-city-park_39630-157.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/pattaya-chonburi-thailand-28-may-2019-beautiful-landscape-cityscape-pattaya-city-is-popular-destination-thailand-with-white-cloud-blue-sky_74190-8741.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/cityscape-singapore-city-skyline_74190-6349.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/road-with-illuminated-streetlights_1127-2084.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/girl-vaping_1303-5743.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/tired-man-waiting-cafe_1098-13050.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/couple-path-bamboo-forest_23-2147637662.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/man-having-fun-with-skateboard-outdoors-park_23-2148823960.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/surfer-sits-longboard-city-skatepark-hugging-his-brown-white-basenji-dog-looking-city-landscape-shot-from-back_346278-1749.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/girl-jumping-with-excitement-doorway-with-sea_181624-20834.jpg?size=338&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/woman-walking-kelingking-beach-nusa-penida-island-bali-indonesia_335224-337.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all pantai-laut">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/young-man-arms-outstretched-by-sea-sunrise-enjoying-freedom-life-people-travel-wellbeing-concept_169160-15.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Pantai & laut</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/image-wooden-table-front-abstract-blurred-restaurant-lights-background_36051-392.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/girl-drinking-tea-istanbul_1157-8843.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all alam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/aerial-view-group-people-surrounding-fire-pit-campsite_181624-26063.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Alam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/urban-scene-skyline-morning-view-metropolis-concept_53876-23186.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/landscape-lake-park_1268-15232.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/car-car-park_1150-8889.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all gedung-kota">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/chicago-skyline-aerial-drone-view-from-city-chicago-downtown-skyscrapers-lake-michigan-cityscape-illinois-usa_146539-151.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Gedung & kota</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all malam">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/parked-bicycles-sharing-with-green-illuminationt-night-bucharest-romania_1268-16392.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Potret malam</span>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all taman">
                    <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/happy-family-three-cycling-street-road_1398-4068.jpg?size=626&ext=jpg&uid=P32456831&ga=GA1.2.1071532805.1610099719" alt="post">
                        <span class="category-name">Taman</span>
                    </div>
                </div>
                <!-- end of single post -->
               
            </div>
        </div>
    </div>

@endsection