# Example addon extension to demonstrate an extended search

## What does it do?
Add and select box with frontend user groups to filter the frontend user by their group.

![][search-bar] 

![][search-select]

[search-bar]: http://chriwo.de/fileadmin/tumblr/femanager_extended_search_searchbar.png
[search-select]: http://chriwo.de/fileadmin/tumblr/femanager_extended_search_searchselect.png

## Installation / Configuration
Download the extension from github and upload it via ftp or use a composer based installation.

### Composer
Add `{ "type": "vcs", "url": "git@github.com:chriwo/femanager_extended_search.git"}` into the repository section. After
that you could use

    composer require chriwo/femanager_extended_search

### Configuration
Add the static TypoScript `Femanager extended search`.

In the TypoScript setup is it possible to exclude frontend user groups from select box. See the code snippet below and add
frontend user groups ID as comma separated list to exclude them.

    plugin.tx_femanager {
        settings {
            list {
                filter {
                    searchgroup {
                        removeFromUserGroupSelection =
                    }
                }
            }
        }
    }

## Changelog
- 1.0.1 BugFix Release
    * 2017-07-04 [RELEASE] Set femanager_extended_search version to 1.0.1
    * 2017-07-04 [DOC] Update readme
    * 2017-07-04 [TASK] Update copyright (Commit: 9d5a52f by Christian Wolfram)
    * 2017-07-04 [BUGFIX] Extend viewhelper from core AbstractViewhelper (Commit: c0dff5a by Christian Wolfram)
    * 2017-07-04 [BUGFIX] Wrong In2code namespace (Commit: d6c7fdf by Christian Wolfram)
    * 2017-07-04 [TASK] Set version to 1.0.1-dev (Commit: 7778564 by Christian Wolfram)

- 1.0.0 First upload to github