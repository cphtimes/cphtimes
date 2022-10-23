const { autocomplete, getAlgoliaResults } = window['@algolia/autocomplete-js'];
/// import { autocomplete, getAlgoliaResults } from '@algolia/autocomplete-js';
import algoliasearch from 'algoliasearch';
const searchClient = algoliasearch(
  '0ARITAM9OW',
  '6af332352f3f491234bc60eb739f2ef9'
);

autocomplete({
  container: '#autocomplete',
  placeholder: 'Search for articles',
  detachedMediaQuery: '',
  renderNoResults({ state, render }, root) {
    render(`No results for "${state.query}".`, root);
  },
  getSources({ query }) {
    return [
      {
        sourceId: 'dev_articles',
        getItems() {
          return getAlgoliaResults({
            searchClient,
            queries: [
              {
                indexName: 'dev_articles',
                query,
                params: {
                  hitsPerPage: 5,
                  attributesToSnippet: ['headline:10', 'abstract:35'],
                  snippetEllipsisText: '…',
                },
              },
            ],
          });
        },
        templates: {
          item({ item, components, html }) {
            return html`<div style="border-bottom: 1px dotted rgba(0,0,0,.125);" class="d-flex justify-content-start align-items-center w-100 py-3">
              <div class="me-4">
                <p class="mb-1">
                  <small class="text-uppercase fw-bold">
                    ${item.article_section}
                  </small>
                </p>
                <small class="text-muted">${item.date_published}</small>
              </div>
              <div class="me-auto">
                <h5 class="aa-ItemContentTitle crop-text-1 mb-2">
                  ${components.Highlight({
                    hit: item,
                    attribute: 'headline',
                  })}
                </h5>
                <p class="mb-0 text-muted crop-text-1">
                  ${components.Snippet({
                    hit: item,
                    attribute: 'abstract',
                  })}
                </p>
              </div>
              <img
                class="ms-4"
                src="${item.thumbnail_url}"
                alt="${item.headline}"
                width="50"
                height="50"
              />
            </div>`;
          },
        },
        onSelect({ state, event, item, itemInputValue, itemUrl, source }) {
          console.log('state, event, item, itemInputValue, itemUrl, source:', state, event, item, itemInputValue, itemUrl, source);
          return item.thumbnail_url;
        },
      },
    ];
  },
})
