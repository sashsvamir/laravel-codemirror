## Codemirror with uploader

This is component replace your textarea element to codemirror editor.




### Installation:
```sh
composer require sashsvamir/laravel-codemirror:"dev-main"
```




### Codemirror

To replace textarea by codemirror components, you should wrap textarea 
element by codemirror component `<x-slbc::textarea-codemirror>`:
```html
<x-slbc::textarea-codemirror>
    <textarea name="body">Your text here</textarea>
</x-slbc::textarea-codemirror>
```




