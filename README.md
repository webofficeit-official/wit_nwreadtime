# TYPO3 Extension `wit_nwreadtime`

Our new TYPO3 extension includes a view helper that calculates the estimated reading time for news extension, 
enhancing the user experience for your readers.

## Installation

Install this extension via `composer req wit/wit-nwreadtime` and activate
the extension in the Extension Manager of your TYPO3 installation.

## Adding to your own sitepackage

In your news template, add the following code:

```html
    {namespace time=Wit\WitNwreadtime\ViewHelpers}

    <time:readtime newsId="{CURRENT_NEWS_ID}"  />
```

Replace CURRENT_NEWS_ID with the ID of your current news item. This code will render the estimated reading time for your news post based on the content.

## Argument

If you add format="true" it will render as 00:00:00

```html
    <time:readtime newsId="{CURRENT_NEWS_ID}" format="true" />
```

The default value will be 00 hours, 00 minutes, 00 seconds