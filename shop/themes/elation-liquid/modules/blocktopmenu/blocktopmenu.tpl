{if $MENU != ''}
<!-- Menu -->
        <nav id="eb-top-nav" class="clearfix">
          <ul class="eb-nav clearfix">
            {$MENU}
            {if $MENU_SEARCH}
            <li class="sf-search noBack" style="float:right">
              <form id="searchbox" action="search.php" method="get">
                <input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
                <input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query}{/if}" />
                <input type="submit" name="submit_search" value="{l s='Search'}" class="button" />
              </form>
            </li>
            {/if}
            <li class="eb-nav-phone-item"><a href="my-account.php" {if $page_name == 'my-account'}selected="selected"{/if}>{l s='My Account' mod='blockcategories'}</a></li>
            <li class="eb-nav-phone-item"><a href="cms.php?id_cms=4">{l s='About' mod='ebmobilenav'}</a></li>
            <li class="eb-nav-phone-item"><a href="contact-form.php" {if $page_name == 'contact-form'}selected="selected"{/if}>{l s='Contact' mod='blockcategories'}</a></li>
          </ul>
          <a href="#" id="eb-phone-trigger">Trigger Mobile Navigation</a>
        <div class="sf-right">&nbsp;</div>
        </nav>
<!--/ Menu -->
{/if}
