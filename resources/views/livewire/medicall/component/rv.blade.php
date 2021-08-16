<div>
    <form wire:submit.prevent="rendez_vous" class="appointment-form">
        <h3 class="mb-3">Prendre un rendez-vous</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" wire:model="name" class="form-control" placeholder="Nom" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" wire:model="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" wire:model="tel" class="form-control" placeholder="Téléphone" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-field">
                        <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select wire:model="needs" class="form-control">
                                <option value="0">Besoin</option>
                                <option value="1">Infirmier</option>
                                <option value="2">Sage-femme</option>
                                <option value="3">Kinesitérapeute</option>
                                <option value="4">Rejoindre notre équipe</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea wire:model="description" class="form-control" placeholder="Description du besoin" cols="10"
                        rows="4" required></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary py-3 px-4">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</div>
