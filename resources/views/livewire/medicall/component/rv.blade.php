<div>
    <form wire:submit.prevent="rendez_vous" class="appointment-form">
        <h3 class="mb-3">Prendre un rendez-vous</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" wire:model.defer="name" class="form-control" placeholder="Nom" required>
                     @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" wire:model.defer="email" class="form-control" placeholder="Email" required>
                     @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" wire:model.defer="tel" class="form-control" placeholder="Téléphone" required>
                     @error('tel') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-field">
                        <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select wire:model.defer="needs" class="form-control">
                                @foreach ($functions as $function)
                                    <option value="{{ $function->id }}">{{ $function->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea wire:model.defer="description" class="form-control" placeholder="Description du besoin" cols="10"
                        rows="4" required></textarea>
                        @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary py-3 px-4">Envoyer</button>
                </div>
            </div>
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>
