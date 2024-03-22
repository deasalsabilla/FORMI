<div class="col-md-4">
  <!-- Sidebar -->
  <div class="card sidebar" style="max-height: 500px; overflow-y: auto;">
    <div class="card-body">
      <h3 class="card-title" style="padding-left: 20px">
        Materi Kuliah
      </h3>

      <div class="accordion" id="semesterAccordion">
        @foreach($opt as $semester)
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="semester{{ $semester->kode }}Heading">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#semester{{ $semester->kode }}Collapse" aria-expanded="true" aria-controls="semester{{ $semester->kode }}Collapse">
              {{ $semester->nama }}
            </button>
          </h2>
          <div id="semester{{ $semester->kode }}Collapse" class="accordion-collapse collapse show" aria-labelledby="semester{{ $semester->kode }}Heading" data-bs-parent="#semesterAccordion">
            <div class="accordion-body">
              <ul>
                <li><a href="#">All</a></li>
                @foreach($data as $mataKuliah)
                @if($semester->kode == $mataKuliah->semester)
                <li><a href="#">{{ $mataKuliah->nama }}</a></li>
                @endif
                @endforeach

              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>