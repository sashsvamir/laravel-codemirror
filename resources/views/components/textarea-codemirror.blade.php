@pushOnce('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css" rel="stylesheet">

    <style>
        .CodeMirror {
            border: 1px solid #ced4da;
            border-radius: 4px;
            resize: vertical;
        }
        .CodeMirror .CodeMirror-scroll {
            font-size: .9rem;
            font-family: Nunito, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        .CodeMirror .CodeMirror-gutters {
            background: #f8fafc;
            border-right-color: #ced4da;
        }
    </style>
@endPushOnce
@pushOnce('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/xml/xml.min.js"></script>
    {{-- Addons: --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closebrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closetag.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/fold/foldcode.min.js"></script>--}}

    <script>
        // init on next cycle, to prevent lost focus after js frameworks (vue) rebuild dom
        setTimeout(() => {

            /**
             * Create CodeMirror from textarea
             * @see: https://codemirror.net/doc/manual.html
             */
            document.querySelectorAll('[data-codemirror-wrapper] textarea').forEach(textarea => {
                // get textarea height before hidden
                const textareaHeight = textarea.clientHeight

                // create codemirror from textarea
                const cm = CodeMirror.fromTextArea(textarea, {
                    lineNumbers: true,
                    mode: 'htmlmixed',
                    indentWithTabs: false,
                    indentUnit: 4,
                    smartIndent: false,
                    // tabSize: 4,
                    dragDrop: false,
                    autoCloseBrackets: true,
                    autoCloseTags: true,
                    // foldGutter: true,
                })

                // make codemirror size same as textarea
                cm.setSize('100%', textareaHeight)

                // add method to textarea for get text from codemirror
                textarea.updateFromWysiwyg = () => {
                    cm.save()
                }
            })

        }, 0)
    </script>
@endPushOnce


<div data-codemirror-wrapper>
    {{ $slot }}
</div>

