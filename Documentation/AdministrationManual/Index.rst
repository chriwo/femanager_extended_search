.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _admin-manual:

Administration Manual
=====================

Installation
------------

The extension needs to be installed as any other extension of TYPO3 CMS:

#. Switch to the module “Extension Manager”.

#. Get the extension

   #. **Get it from the Extension Manager:** Press the “Retrieve/Update”
      button and search for the extension key *femanager_extended_search* and import the
      extension from the repository.

   #. **Get it from typo3.org:** You can always get current version from
      `http://typo3.org/extensions/repository/view/femanager_extended_search/current/
      <http://typo3.org/extensions/repository/view/femanager_extended_search/current/>`_ by
      downloading either the t3x or zip version. Upload
      the file afterwards in the Extension Manager.

   #. **Use composer**: Use `composer require chriwo/femanager_extended_search`.

Preparation: Include static TypoScript
--------------------------------------

Add the static TypoScript `Femanager extended search`.

In the TypoScript setup is it possible to exclude frontend user groups from select box. See the code snippet below and add
frontend user groups ID as comma separated list to exclude them.

::

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

