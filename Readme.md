## Codemirror

This is component replace your textarea element to codemirror editor.




### Installation:
```sh
composer require sashsvamir/laravel-codemirror




### Setup

To replace textarea by codemirror components, you should wrap textarea 
element by codemirror component `<x-slbc::textarea-codemirror>`:
```html
<x-slbc::textarea-codemirror>
    <textarea name="body">Your text here</textarea>
</x-slbc::textarea-codemirror>
```



### Note

If you want to save form data with ajax request, you must update hidden source textarea by running method `querySelectorAll()` on textarea element:
```javascript
form.querySelectorAll('textarea').forEach(textarea => {
    if (textarea.updateFromWysiwyg) {
        textarea.updateFromWysiwyg()
    }
})
```

