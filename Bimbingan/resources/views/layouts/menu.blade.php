












<li class="nav-item">
    <a href="{{ route('dataMahasiswas.index') }}"
       class="nav-link {{ Request::is('dataMahasiswas*') ? 'active' : '' }}">
        <p>Data Mahasiswas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dataDosens.index') }}"
       class="nav-link {{ Request::is('dataDosens*') ? 'active' : '' }}">
        <p>Data Dosens</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('dataKonsultasis.index') }}"
       class="nav-link {{ Request::is('dataKonsultasis*') ? 'active' : '' }}">
        <p>Data Konsultasis</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('jurusans.index') }}"
       class="nav-link {{ Request::is('jurusans*') ? 'active' : '' }}">
        <p>Jurusans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('prodis.index') }}"
       class="nav-link {{ Request::is('prodis*') ? 'active' : '' }}">
        <p>Prodis</p>
    </a>
</li>


