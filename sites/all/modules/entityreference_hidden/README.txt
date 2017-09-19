This module provides a hidden field widget for an entity reference field.

It is dependent upon the following modules:

* entityreference
* hidden_field

This field gets values populated to it through query parameters on the entity 
edit forms.

For example, if you have a node based content type with a machine name of 
test_type with an entityreference field named field_entityref that has its 
widget set to "Hidden field", you can populate that field with a value passed 
through the query parameter of the node add/edit form, like so:

http://www.example.com/node/add/test-type?field_entityref=1  (add new node)
http://www.example.com/node/2/edit?field_entityref=1&replace=yes (edit
  existing node)

For creating a new node, you simply pass the field name and a valid entity
reference id (an invalid value will generate a form error message).

For editing an existing node, you pass the field name and a valid entity
reference id, along with an additional parameter "replace" set to "yes".  If
you do not pass "replace=yes" when editing an existing node, any field
values passed in the query parameters will be ignored for entity reference
fields.

Query parameters are gotten by calling drupal_get_query_parameters().

Once saved, the content type instance's entity reference field can be
rendered as any other entity reference field.
