<div>
    @section('content')
        {{-- @include('flash') --}}
        @include('0 vacation.section.call_to_action')
        {{-- @include('0 vacation.section.services',[$services=>null]) --}}
        {{-- @include('0 vacation.section.room') --}}
        {{-- @include('0 vacation.section.feedback') --}}
        {{-- @include('0 vacation.section.offer',[$offers=>null]) --}}
        @include('0 vacation.section.banner')
        {{-- @include('0 vacation.section.bloglist',[$posts => null]) --}}

        {{-- @foreach ($services as $service) --}}
        {{-- @include('0 vacation.modal.modal',['title'=>$service->title, 'id'=>$service->id,'content'=>$service->content]) --}}
        {{-- @endforeach --}}
        {{-- @livewire('medicall.component.postuler') --}}
        {{-- @include('0 vacation.modal.modal-lg',['title'=>'Postuer', 'id'=>'postuler','content'=>'0 vacation.modal.postuler']) --}}

        @livewire('medicall.layout.footer')

    @endsection
</div>
