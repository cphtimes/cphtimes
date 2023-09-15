import EditorJS from '@editorjs/editorjs';
import Embed from '@editorjs/embed';
import List from '@editorjs/list';
import CheckList from '@editorjs/checklist';
import LinkTool from '@editorjs/link';
import Header from '@editorjs/header';
import SimpleImage from '@editorjs/simple-image';
import ImageTool from '@editorjs/image';
import Delimiter from '@editorjs/delimiter';
import Quote from '@editorjs/quote';
import Code from '@editorjs/code';
import Warning from '@editorjs/warning';
import Marker from '@editorjs/marker';
import InlineCode from '@editorjs/inline-code';
import edjsHTML from 'editorjs-html'
import Table from '@editorjs/table';
import Underline from '@editorjs/underline';

/**
 * To initialize the Editor, create a new instance with configuration object
 * @see docs/installation.md for mode details
 */

var blocks = []
var bodyBlocks = document.getElementById('body_blocks');
if (bodyBlocks) {
    let data = bodyBlocks.value.length > 0 ? bodyBlocks.value : JSON.stringify([]);
    blocks = JSON.parse(data);
}

var editor = new EditorJS({
  /**
   * Enable/Disable the read only mode
   */
  readOnly: false,

  /**
   * Wrapper of Editor
   */
  holder: 'editorjs',

  /**
   * Common Inline Toolbar settings
   * - if true (or not specified), the order from 'tool' property will be used
   * - if an array of tool names, this order will be used
   */
  // inlineToolbar: ['link', 'marker', 'bold', 'italic'],
  // inlineToolbar: true,

  /**
   * Tools list
   */
  tools: {
    embed: {
      class: Embed,
      inlineTool: true,
      config: {
        services: {
          facebook: true,
          instagram: true,
          youtube: true,
          twitch: true,
          miro: true,
          vimeo: true,
          gfycat: true,
          aparat: true,
          "Yandex.Music": true,
          coub: true,
          codepen: true,
          pinterest: true,
          rumble: {
            regex: /https?:\/\/rumble\.com\/embed\/([^\/\?\&]+)\/\?pub=4/,
            embedUrl: 'https://rumble.com/embed/<%= remote_id %>/',
            html: "<iframe class='rumble' scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe>",
            height: 300,
            width: 600,
            id: (groups) => groups.join('/')
          },
          bitchute: {
            regex: /https?:\/\/www\.bitchute\.com\/video\/([^\/\?\&]*)\//,
            embedUrl: 'https://bitchute.com/embed/<%= remote_id %>',
            html: "<iframe scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe>",
            height: 300,
            width: 600,
            id: (groups) => groups.join('/')
          },
          odysee: {
            regex: /https?:\/\/odysee\.com\/([^\/\?\&]*)\/([^\/\?\&]*)/,
            embedUrl: 'https://odysee.com/$/embed/<%= remote_id %>?r=BhpAtxerT22M7gkDwKb5F6GpksoKYgq5',
            html: "<iframe scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe>",
            height: 300,
            width: 600,
            id: (groups) => groups.join('/')
          },
         spotify: {
            regex: /https?:\/\/open\.spotify\.com\/track\/([^\/\?\&]*)\/?.*/,
            embedUrl: 'https://open.spotify.com/embed/track/<%= remote_id %>?utm_source=generator',
            html: "<iframe scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe>",
            height: 300,
            width: 600,
            id: (groups) => groups.join('/')
         }
        }
      }
    },
    underline: Underline,
    table: Table,
    list: List,
    // warning: Warning,
    // code: Code,
    linkTool: LinkTool,
    image: {
      class: ImageTool,
      config: {
        endpoints: {
          byFile: `${window.location.protocol}//${window.location.host}/api/uploadFile`,
          byUrl: `${window.location.protocol}//${window.location.host}/api/fetchUrl`
        }
      }
    },
    // raw: Raw,
    header: Header,
    quote: Quote,
    marker: Marker,
    checklist: CheckList,
    delimiter: Delimiter,
    inlineCode: InlineCode,
    simpleImage: SimpleImage, // Note: There's an error here why?
  },

  /**
   * This Tool will be used as default
   */
  // defaultBlock: 'paragraph',

  /**
   * Initial Editor data
   */
  data: {
    blocks
  },
  onChange: function(api, event) {
    editor.save()
    .then((savedData) => {
      const edjsParser = edjsHTML({
          table: tableParser,
          image: imageParser,
          embed: embedParser,
          checklist: checklistParser
      })
      let html = edjsParser.parse(savedData);

      document.getElementById("body_html").value = html.join('')
      document.getElementById("body_blocks").value = JSON.stringify(savedData.blocks);

    })
    .catch((error) => {
      console.error('Saving error', error);
    });
  }
});

function imageParser({data}) {
  return `<figure class="figure"><img class="figure-img img-fluid" src="${data.file.url}" alt="${data.caption}"/><figcaption class="figure-caption text-start">${data.caption}</figcaption></figure>`
}

function embedParser({data}) {
    switch (data.service) {
        case 'rumble':
            return `<div class="ratio ratio-16x9 mb-3"><iframe class="rumble" src="${data.embed}" scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe></div>`
        case 'spotify':
            return `<div class="mb-3"><iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2dphvmoLEXdk8hOYxmHlI3?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></div>`
        default:
            return `<div class="ratio ratio-16x9 mb-3"><iframe src="${data.embed}" frameborder='no' allowtransparency='true' allowfullscreen='true'></iframe></div>`
    }
}

function tableParser({data}) {
    var { content } = data
    var html = '<table class="table mb-3"><tbody>'
    content.forEach((row) => {
        var td = "<tr>"
        row.forEach((column) => {
            td += "<td>" + column + "</td>"
        })
        td += "</tr>"
        html += td
    })
    html += "</tbody>"
    return html
}

function checklistParser({data}) {
    var { items } = data
    var html = '<div class="mb-3">'
    items.forEach(({text, checked}) => {
        if (checked) {
            html += `<div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked disabled>
                <label class="form-check-label" for="flexCheckDefault">
                    ${text}
                </label>
            </div>`
        } else {
            html += `<div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" disabled>
                <label class="form-check-label" for="flexCheckDefault">
                    ${text}
                </label>
            </div>`
        }
    })
    html += "</div>"
    return html
}

/**
 * Saving button
 */
const saveButton = document.getElementById('saveButton');

/**
 * Saving example
 */
/*
saveButton.addEventListener('click', function () {
  editor.save()
    .then((savedData) => {
      console.log("savedData =>", savedData)
      let html = edjsParser.parse(savedData);
      console.log("html => ", html)
      debugger;
    })
    .catch((error) => {
      console.error('Saving error', error);
    });
});
*/