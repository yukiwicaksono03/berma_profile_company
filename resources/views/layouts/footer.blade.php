<nav class="footer px-5 py-3" style="background:#212529; color: white">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <p class="fs-5 fw-bold">
                    {{ $master->title_footer }}
                </p>
                <p class="fs-6">
                    {{ $master->desc }}
                </p>
                <div class="d-flex gap-3">
                    <a target="_blank" href="{{ $master->link_instagram }}" class="text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a target="_blank" href="{{ $master->link_facebook }}" class="text-white">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a target="_blank" href="{{ $master->link_youtube }}" class="text-white">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a target="_blank" href="{{ $master->link_tiktok }}" class="text-white">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
                <p class="fs-6 mt-3">
                    2026 &copy; Berma
                </p>
            </div>
            <div class="col-lg-6">
                <p class="fs-6">
                    Contact Center
                </p>
                <p class="fs-6">
                    <a target="_blank" href="{{ $master->link_maps }}" class="text-white text-decoration-none">
                        <i class="fas fa-map-marker-alt me-2"></i>  {{ $master->alamat }}
                    </a>
                </p>
                <p class="fs-6">
                    <a target="_blank" href="{{ whatsapp_url($master->whatsapp) }}" class="text-white text-decoration-none">
                        <i class="fab fa-whatsapp me-2"></i> Whatsapp
                    </a>
                </p>
            </div>
        </div>
    </div>
</nav>