# XHTMLEditorConfig

Small module to configure the CMS HTMLEditor via a yml file.

Just create a htmleditor.yml file in your mysite/_config folder and configure the possible options.

See this example file as a reference:

```
---
Name: mysite-editor
After:
  - 'xhtmleditor-config'
---
XHTMLEditorConfig:
  buttons:
    1: 
      - undo
      - redo
      - separator
      - cut
      - copy
      - paste
      - pastetext
      - separator
      - bold
      - italic
      - underline
      - strikethrough
      - separator
      - justifyleft
      - justifycenter
      - justifyright
      - justifyfull
      - formatselect
      - separator
      - bullist
      - numlist
      - outdent
      - indent
      - blockquote
      - hr
    2:
    3:
  options:
    paste_text_sticky_default: true
```

@TODO:
  - validate buttons and options