@props(['certificates' => []]) @if(!empty($certificates))
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
  @foreach($certificates as $certificate)
  <x-section-card>
    <div class="flex flex-col gap-4">
      @php $imageUrl = $certificate->url ?? ''; @endphp @if(!empty($imageUrl))
      <div
        class="relative rounded-xl overflow-hidden border border-slate-200/70 shadow-sm"
      >
        <img
          src="{{ $imageUrl }}"
          alt="{{ $certificate->name }}"
          class="w-full h-56 object-cover hover:scale-[1.05] transition-transform duration-300"
          loading="lazy"
        />
      </div>
      @endif

      <div>
        <div class="flex flex-col justify-center items-center">
          <div class="flex items-center justify-between w-full">
            <!-- Giữ justify-between cho issuer và date -->
            @if(!empty($certificate->issuer))
            <p class="text-slate-500 text-xs truncate">
              {{ $certificate->issuer }}
            </p>
            <!-- Giảm text-sm thành text-xs, thêm truncate -->
            @endif @if(!empty($certificate->date))
            <span
              class="text-xs px-2 py-1 rounded-full bg-slate-100 text-slate-600 "
            >
              {{ $certificate->date->format('M Y') }}
            </span>
            @endif
          </div>

          <h3
            class="text-[15px] font-semibold text-center hover:text-blue-500"
          >
            {{ $certificate->name }}
          </h3>
        </div>
        <!-- Thay đổi div cha thành flex-col, căn giữa -->
      </div>
    </div>
  </x-section-card>
  @endforeach
</div>
@endif
