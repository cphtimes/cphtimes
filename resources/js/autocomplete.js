const { autocomplete, getAlgoliaResults } = window['@algolia/autocomplete-js'];
import algoliasearch from 'algoliasearch';
const searchClient = algoliasearch(
  '0ARITAM9OW',
  '6af332352f3f491234bc60eb739f2ef9'
);

const { setIsOpen } = autocomplete({
  openOnFocus: true,
  container: '#autocomplete',
  placeholder: 'Search for articles',
  detachedMediaQuery: '',
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
            return html`<div class="aa-ItemWrapper list-group-item border-dashed">
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
                      style="object-fit: cover;"
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
          let section = item["article_section"].toLowerCase();
          let headline = item["headline_dashed"];
          let href = `/section/${section}/${headline}`;
          window.location.href = href;
        },
      },
    ];
  },
  render({ children, render, html }, root) {
    render(html`<div class="aa-SomeResults">${children}</div>`, root);
  },
  renderNoResults({ state, render, html }, root) {
    render(html`<div class="aa-NoResults d-flex justify-content-center align-items-center p-5">No results for "${state.query}".</div>`, root);
  }
})

export function openAutoComplete() {
  setIsOpen(true);
}