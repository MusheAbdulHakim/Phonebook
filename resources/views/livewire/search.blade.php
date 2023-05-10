<div>
    <div class="container text-center">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-2">
            <h3>Contacts</h3>
            <a href="{{route('contacts.create')}}"><button class="btn btn-primary"><span><i class="fas fa-plus"></i></span> Add Contact</button></a>
        </div>

        <div class="input-group">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search for contact by lastname" wire:model="searchTerm" />
        </div>


        <ul class="mt-3 list-group">
            @foreach ($contacts as $contact)
                <div class="card p-2 border-bottom-0">
                    <div class="d-flex justify-content-between">
                        <li class="list-group-item border-0">
                            <p>
                                <b>{{$contact->firstname.' '.$contact->lastname}}</b>
                            </p>
                            <p><span class="text-secondary"><span><i class="fas fa-phone"></i></span> {{$contact->phone}}</span></p>
                        </li>
                        <li class="list-group-item border-0">
                            <div class="d-flex justify-between">
                                <div><a href="{{route('contacts.edit', $contact->id)}}"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a></div>
                                <form action="{{route('contacts.destroy',$contact->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </li>
                    </div>
                </div>
            @endforeach
        </ul>

        <div class="mt-3">{{$contacts->links('vendor.livewire.custom-pagination')}}</div>
    </div>
</div>
