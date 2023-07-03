<div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="popular-title">Artikel Terbaru</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="gambar-kecil">
                                    <img class="img-fluid" src="{{ url('foto').'/'. $item->foto_artikel }}" alt="">
                                </div>
                                <div class="details">
                                    <a href="{{ route('detail-blog', $item->id)}}">
                                        <h6>{{$item->judul_artikel}}</h6>
                                    </a>
                                    <p>{{ $item->category->nama_cat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>