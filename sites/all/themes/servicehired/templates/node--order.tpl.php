<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup templates
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


    <div class="left">
        <div class="cont">
            <h3>Your order</h3>
            <div class="info">
                <div class="line">
                    <div class="order-label">When:</div><div class="insides"> 10.02.2017 - 14.00</div>
                </div><div class="line">
                    <div class="order-label">Where:</div><div class="insides"> London - 9532C</div>
                </div>

                <div class="line">
                    <div class="order-label">What:</div><div class="insides"> <?php print $node->title; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="cont">
            <div class="top-header">
                <div class="status">
                    <h3>Project status</h3>
                    <div class="status-bar status-<?php print $node->field_status['und'][0]['value']; ?>">
                        <div class="bar first">Order made</div>
                        <div class="bar second">Service confirmed</div>
                        <div class="bar last">Service paid</div>
                    </div>
                </div>
                <div class="actions">
                  <btn class="btn">Confirm availability</btn>
                </div>
            </div>
            <div class="offer">
                <h3>Service package</h3>
                <div class="offer">
                    <div class="description">
                        Up to a 1 hour photo shoot1 location (we will help you find a truly unique location)1 outfit
                        Shots include:- Portraits- Close-upsWhat you will receive:- All images will be color corrected
                        and retouched- High resolution images with personal printing rights- Up to 20 of the best images
                        of the day color corrected and print ready.
                    </div>
                    <div class="pricing">
                        <div class="price">200.00</div>
                        <div class="currency">€</div>
                        <div class="vat">Vat. Included</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="messaging">
                <h3>Messages</h3>
                <div class="message">
                    <div class="user-image">
                        <img src="data:image/jpeg;base64,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"></div><div class="message-text">Lorem ipsum dolor set.</div>
                    <div class="clearfix"></div></div>
                <div class="message">
                    <div class="user-image"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBAQEBAVFRUQEA8SFRUVFQ8VFRUPFRUWFxUXFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0OFxAQGi0dHR4rKy0tLS0tLS0tLS0tKy0tKystLS0rLS0rLS0tLS0rLSstLS0tLSstKy0rNy0tLS03Lf/AABEIAQMAwgMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xAA4EAACAQIDBQQHBwUBAAAAAAAAAQIDEQQhMQUGEkFRImFxkQcTMoGhscEVUmJy0eHwFCMkQvGi/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAEDBAIF/8QAIhEBAQADAAIBBAMAAAAAAAAAAAECAxESITEEMkFRIkJh/9oADAMBAAIRAxEAPwD28AAACUBAJIAm5AIYEghMqQCwsSAIsRYqAFIE2UqQFdyShMqQEgAACABIIAEggAQASBAJIAkgC4C4sSkSBCRJj4rFwpq83ZGuxm3qcUmpxzfe8iOxMlblkKRwW2t/KMOypcUtUs/LI5XEekusn2dF+FkeUdeFezg8fwvpOm5dvigklyvc3mzvSJGo3ZprJZppedx5Q8K9FIsc9hN54SaTVm/LzNxh8YpXWeXcTLHNxsX3kSmSCUJIAAAgASAAAAAgkAAQSAIIhEqREpJK7Als53b23vV5QfVOXeXNs7w06UG3ok76+S7zx7eDfWLqSjFX14Vql+a2SOMsneOLfbb3n4E5VZJvkm38uRwO0d6K9RtRk0rtqyay/Qwce3iHxzea556dPAilhLJK+jXeV9WyE1KavNtuWjcnll/PIVMM7Rd89NXkXXSaSfS/k/8AghJ3fjqR1PGMpT0bv0vd5IyYVJQjxU+y9XbRe4mrG2a5lLTbeWv00HTjOwW9Vem1lfvi7P3p6noG6fpCjKXBUzl915NvLToeTzo59M/lqUSg001rbVZPuJ6ix9PYLa0ZLi4sssms79Db0aqkro+eN2t9atDghUfEr6tXlZPTvPZd2dvU68FOEuy3mucX4ckWY5K8sXSgA7VqQCUAJAAAACAAgAZIAhGn3hxrjDhjk3z6fubduyb6HlfpJ3i9XSml7TatH8PL+d5zleOsZ2uX363ik/7NN3k21k27L73vOMw2BaV+erbMvCUHKTqTd5SzbfU3mDwcpNKxRcmmYtNRwz0RmYbAS6f8Oqwmw00ro3OG2TFaoruayYOFls6T5fPIt1tlPoekfZ0ehT9lroR5p8Hnn2bJpZeAlseSzt4HoS2auhWtnIjzT4PLcTsyTztpf59DCeGta8b2PV8TsqLWhocfsDJtHUzc3W4SWG5vTl49xvt1tvPDVYcTaUnbLR/uW8ZgJRurZLqavE03bJaFkqu4vpHYWN9ZTWd1ZOL/AA9Pd+hs2eS+irb0nHgqSu6bUe/hfP4nrKd0X43sZspyhUQSdOQAAAABARIABgiQGFtitwUKktOy14XPAd88X6/FRi8+FZdbrL9T2/fCtw4affkfP9Rxni6su+xVsq7VG22dhHNxVuXkjr8Bs+MUsjE2Bg+zxNHQ06Zkyvtsxnoo0UZCpldKmXlTI466tJFTRXwBxI4dWWiHEvcI4BwYjplmtSujYcBZq0xw653H4JPLr/PocltXZrg3ZZM9DrU1Y0m1MKmnc6xyc5RxOwMfKhiopNpVVwtd3Vd59E7HxKqUKU73vFX8eZ877Vw6jOnNf6zR7V6PMS54Z3fsyUfhk/ia9dY9kdWAC1SAAAAAAAAEMADjvSfieDCx75o8X2LC9V8+1J/E9p9JuHU8NC/KZ5Hu1hv7rXT6FG1o0u92fC0UtMkbSlEw8LDQ2NMyRs/C/TReLdNFzhOnKmwJkiEglFiUibCwEMs1C+4lmaBGFWhqa7HwvFm1qIwcQjhLz7b1N59x6N6KqvFQqK+d6b56Wt9Dhd5qXDK/3rnd+ienGNCeebcVfrkzXqrJuj0JAA0MwAAAAAAEIAwABz2/dNPB1OsbNeefwPMN1MN/cqt8sj1Te6rD+mq03JcUqcnGLau7K90vcebboRyrP8SM+5p0Ohp5FNXa1ODte77il4bjdpN8K5Lm+82FGjTgrRhHyz8zPI1WsejtylzbRn0dqUZezUTMDF0aUrqdOD91n5o1c9mwvem2viiUcdcpJ6MNGj2Y5QdnK6+puYzuR04rSFib5Gv2jUla0Xa/yBzrJrYynH2ppGrxG26KdlK/gaqezuJ3nPyM/B4ehDSEW+su0/iScWftmm3bO3XkXHUUleLujPkoNW4Y+Fo6GvrYOMZcUOz1S0fuIsTK5ze6j2IS/FY7T0b4bhwtO3WUvjb5HJ73Q/x7rlJHYej7FQVGlTlOPHKLyur+5F+ln3u1ABpZAAAAAAIRIAgAAea7+O+IrU5LOVNOD6Wjf9TU7oU2qc29XJX8jq988EniKcmvapyXl/01Oy6KjGVuc2Yc/Vsejhy442fplSlZXOd2rtqbmqVNSbbslH2n7/8AVd5004XVuprMTsztccMn9SMf9dVym2Z4mjGcqijalBTnrK108rt9rLoZWyKtWcVJw1pQqqUHn6uWjcefgbPbOzaleznFX4VBtaSitOKPPUq2dh50ISjFJOSUXJpvspZJJaItvgpk2L+Axbdr5960aOlwNS6zOe2dRs2273zeVs+bNthZ2KL6X/LZ1ZpRNFjsTa76GfiKvI1+IheL5e64Occ5jq1WUZSSbSajraKk3ZLvd2aKhja0pVuFRth6ihU7nK+azu9HodY6U+CdLsyjJaWat4O+pr8JsFxk5OCknNStZLiktOJ8/gXY+KnObO+kf1tfDVFCsrX0ablCS7pP2WdJQrcauYFfB1K01Kq010SyNlh6CgrLQ4z530sx7z21e8dLiw814P4mv3bTj/Tte1Kos+d00b3HU+KnNdxO72zb4rDJ6RXF5ZkS28ifU7b+npYCBveYAAAAAAIAAAAc9vnSvShNaxk15r9jmMDf1d+rT/nkdxt2jxUJ5X4VxeWfyucfTpuMWrZOzXTw87mTdP5dbvp8v4c/S7TLsUUUUZUaZTF1WZU1/LmHUpIzqkSy4ZkkYsaNi9SWZVUVi3Tb4jmpi5WeRZlAu4h9CmlnkE1b9UkzJpQRMqYjSOuuRxLc0ZcaeRYqkUjBqrsz8Da7lw4qjm17NO3m1+jNbKDkmlza8jp91MPw05zt7UrL8sf3bLNU7lFe7LmFb0AG154AAAAAgAAAABEo3TT5q3uOQ2lgpU24tO1+y+TX6nYFvEQ4oyj1i18CvZh5RZr2XCuIoszKbMLQyabMb0PlfnExq8rIybmNUjcEYSvNX7zOwtNWMarTaTUXa65arvRa2VRqU4tSqOeeTlql48yHX4bCtRXCYKi1K6L2JlKcGovhdtbXt4Ix8FRlGPDKcp56ytf4AZ0Kly6kY/BZ3MmLJcomYdVmRUkYlRkVMX8DhJ1GowWrzfJLvZ2eFoKEIwWkVYwN3aVqCf3pSfxt9DaGzVhJOsG7Zcrz9AIJLVIAAAAAgAAAAAAAHE46nw1akek5eV8imnI2O8dDhqqdspr/ANLL5WNZEwbJzKvS13uMrJUiLooRiYzHxptcbefdJ/JHMrrjKZXB2uamW2YLNJ+NpfoU/bEfvLwasTx3MLW4TVi00ax7YgtJRt3WZK2xD+XQ4XDKNtGRPEayltOEnZXv4P56GcRa54VJFhl2RcwGH9ZVhDq1f8qzYx7ajK8nXXbOp8NKnHpCPnbMySESehHl1BJAJEgAAAAIAAAAAASQBh7VwnrabjzWcfzI5G1nZ5NZe87o5HbcbV6nufmkZt+PrrT9Ple+KxGWRanTTvdaiMiozNjBeEs8lddBOlDnEz+G5EsOdeTuZ2NfDD0/ukPCX0XCvjY2CwxU6Y6XZVihh4xVksvqXk7IpKWzmuBs6Pd3A8MfWyWc1Zd0f3NDgYqVWnF5qU4r3XzO3SNGjD8sv1Gf9UgA1MiGCGAJAAAkgAAAAAAAkgADk9vS/wAiS6Rh8jrDlduUX66Ura2Kd/2rtH3NbOHNCEy6kW50zE3MimXGjETa5X8Cr1x10ZKRbqtFlV0Uyk3yJ6InMpjG+pXThzeZckcUV7KX+TS/N9GdqcXsmD9fTdtG/kztDZ9P9rF9R9wGCGXqEMIMlAAAAAAAEEgAAAAAAxMZhFMywRZ1MvHLYrBuL0MOUTr62HUjUYzZ3NIy7NPPhq17pflqIRLiiVSoNPQlIosX9ihxLU0XpJlPqWxxPVqKL9DDOTMvCbOb1N1hsIol2Gq35UZ7ZPhY2fgFGz5myIQNckkZLbakhkkEoAAAAAAAAQSAAAAAAAAAAKWiQBYqYZPkWJYBGcDm4yuplYwFgIl6ng4rkZIuJhC52ojFIkA6chIAAAAAAAAAAEgCkkglAAAAAAAAkCCCbACATYWAgE2FgIBNgAAAAAAAAAJAAAACklAAAAAAAEgAAAAAAAAAAAAAAAgkAAAAAAAAAD//2Q=="></div><div class="message-text">Lorem ipsum dolor set.</div>
                    <div class="clearfix"></div></div>
                <div class="message">
                    <div class="user-image"><img src="data:image/jpeg;base64,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"></div><div class="message-text">Lorem ipsum dolor set.</div>
                    <div class="clearfix"></div></div><div class="message">
                    <div class="user-image"><img src="data:image/jpeg;base64,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"></div><div class="message-text">Lorem ipsum dolor set.</div>
                    <div class="clearfix"></div></div>

                <div class="new-message">
                    <textarea id="message"></textarea>
                    <div class="actions">
                        <btn class="btn">Send</btn>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="cont">
            <h3>Suppliers</h3>
            <div class="suppliers">
                <div class="line">
                    <div class="supplier-image">
                        <img src="https://www.maybelline.com/~/media/mny/us/face-makeup/modules/masthead/maybelline-fit-me-foundation-powder-face-herieth-paul-1x1.jpg?h=320&amp;w=320&amp;la=en-US&amp;hash=3B5E9C176BE1DD97CB6BC8F5CD2F5C7BBA440695">
                    </div>
                    <div class="right-align">
                        <div class="name">Photography package</div>
                        <div class="supplier">John Photography</div>
                        <div class="quote">€ 200.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
