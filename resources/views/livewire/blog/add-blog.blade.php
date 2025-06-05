<div class="relative p-2">

    <div>
        <p class="text-lg font-semibold text-nowrap">{{ __('Configurations') }}</p>
    </div>

    <div class="rounded-2xl border m-4 p-6 overflow-auto bg-white">
        <div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">

                <x-group for="form.conditions_fr" inline="true" label="{{ __('Conditions in French') }}"
                    :error="$errors->first('form.conditions_fr')">
                    <div wire:ignore>
                        <textarea wire:model="form.conditions_fr" id="conditions_fr" rows="10"></textarea>
                    </div>
                </x-group>



            </div>
            <div class="flex items-center justify-end mt-6">

                <x-green-button class="ml-3" wire:click="save" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-green-button>
            </div>
        </div>

    </div>

    <x-loading-save function="save"></x-loading-save>


    @push('scripts')
        <script>
            tinymce.init({
                path_absolute: "/",
                selector: '#conditions_pt',
                relative_urls: false,
                language: 'pt_PT',
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                        'body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName(
                            'body')[0].clientHeight

                    tinymce.activeEditor.windowManager.openUrl({
                        url: '/file-manager/tinymce5',
                        title: 'Baruteem gestionnaire des fichiers',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {
                                text: message.text
                            })
                        }
                    })
                },
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                    editor.on('change', function(e) {
                        @this.set('form.conditions_pt', editor.getContent());
                    });
                }
            });
        </script>

        <script>
            tinymce.init({
                path_absolute: "/",
                selector: '#conditions_fr',
                relative_urls: false,
                language: 'fr_FR',
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                        'body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName(
                            'body')[0].clientHeight

                    tinymce.activeEditor.windowManager.openUrl({
                        url: '/file-manager/tinymce5',
                        title: 'Baruteem gestionnaire des fichiers',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {
                                text: message.text
                            })
                        }
                    })
                },
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                    editor.on('change', function(e) {
                        @this.set('form.conditions_fr', editor.getContent());
                    });
                }
            });
        </script>

        <script>
            tinymce.init({
                path_absolute: "/",
                selector: '#about_fr',
                relative_urls: false,
                language: 'fr_FR',
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                        'body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName(
                            'body')[0].clientHeight

                    tinymce.activeEditor.windowManager.openUrl({
                        url: '/file-manager/tinymce5',
                        title: 'Baruteem gestionnaire des fichiers',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {
                                text: message.text
                            })
                        }
                    })
                },
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                    editor.on('change', function(e) {
                        @this.set('form.about_fr', editor.getContent());
                    });
                }
            });
        </script>

        <script>
            tinymce.init({
                path_absolute: "/",
                selector: '#conditions',
                relative_urls: false,
                language: 'fr_FR',
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                        'body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName(
                            'body')[0].clientHeight

                    tinymce.activeEditor.windowManager.openUrl({
                        url: '/file-manager/tinymce5',
                        title: 'Baruteem gestionnaire des fichiers',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {
                                text: message.text
                            })
                        }
                    })
                },
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                    editor.on('change', function(e) {
                        @this.set('form.conditions', editor.getContent());
                    });
                }
            });
        </script>

    @endpush
</div>
