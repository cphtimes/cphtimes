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
            console.log('item:', item);
            console.log('components:', item);
            return html`<div class="aa-ItemWrapper border-bottom border-dashed">
                <div class="aa-ItemContent d-flex justify-content-start align-items-center py-3 w-100">
                  <div class="flex-shrink-0 me-4">
                    <p class="mb-1">
                      <small class="text-uppercase fw-bold">
                        ${item.article_section}
                      </small>
                    </p>
                    <small class="text-muted">
                      ${new Date(item.date_published).toLocaleDateString()}
                    </small>
                  </div>
                  <div class="flex-shrink-1 me-auto text-overflow">
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
                  <div class="flex-shrink-0">
                    <img
                      class="ms-4"
                      src="${item.thumbnail_url}"
                      alt="${item.headline}"
                      width="50"
                      height="50"
                    />
                  </div>
                </div>
            </div>`;
          },
        },
        onSelect({ state, event, item, itemInputValue, itemUrl, source }) {
          // console.log('state, event, item, itemInputValue, itemUrl, source:', state, event, item, itemInputValue, itemUrl, source);
          let datePublished = new Date(item["date_published"]);
          let year = datePublished.getFullYear();
          let month = String(datePublished.getMonth()+1).padStart(2, '0');
          let day = String(datePublished.getDate()).padStart(2, '0');
          let section = item["article_section"].toLowerCase();
          let headline = item["headline_dashed"];
          let href = `/${year}/${month}/${day}/${section}/${headline}`;
          window.location.href = href;
        },
        empty: function(options) {
          return '<div class="p-4">No results found.</div>';
        }
      },
    ];
  },
})
