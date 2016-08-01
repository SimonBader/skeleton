To get started with data objects, classes must be defined.
In [Objects starting guide](../Getting_Started/Create_A_First_Project.md) you can learn how to create objects and classes.

Defining a class consists of defining the attributes of the object and the layout for data within the object. 
Layout object properties can be grouped into panels, which incorporate the layout areas north, east, west, south and center and additionally they can be positioned into tab panels. 
This allows logical structuring of object attributes into smaller units of data belonging together. 
It depends on the use case how data should be grouped and structured. 

Common applications are tabs/groups for different languages or logical groups like basic data, media, sales data, etc.

## Objects - data types

To define a class, the menu Settings/Objects/Classes needs to be used the pimcore toolbar menu. 

The class name has to be a valid PHP class name. 
After creating a new class, the class attributes and layout can be built.
Class attributes are defined from a set of predefined data types. 
These data types define not only the type of data such as text, number, image, reference to another object etc. but also how data input can be achieved and how data is accessed. 

Each data type comes with an input widget. 
For instance, the image data input comes with a drop area to which a user can drag and drop an image. 

The entire list of data types is indicated below:

| Name                     | Underlying data type                                        | Input widget                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
|--------------------------|-------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| checkbox                 | Pimcore\\Model\\Object\\Class\\Data\\Checkbox               | checkbox                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| country                  | Pimcore\\Model\\Object\\Class\\Data\\Country                | combo box with predefined country list from Zend_Locale                                                                                                                                                                                                                                                                                                                                                                                                                         |
| date                     | Pimcore\\Model\\Object\\Class\\Data\\Date                   | calendar date selector                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| date & time              | Pimcore\\Model\\Object\\Class\\Data\\Datetime               | calendar date selector + combo box for time                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| fieldcollections         | Pimcore\\Model\\Object\\Class\\Data\\Fieldcollections       | A collection of fields                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| geopoint                 | Pimcore\\Model\\Object\\Class\\Data\\Geopoint               | google maps widget to find longitude/latitude                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| geobounds                | Pimcore\\Model\\Object\\Class\\Data\\Geobounds              | google maps widget to define geographical bounds                                                                                                                                                                                                                                                                                                                                                                                                                                |
| geopolygon               | Pimcore\\Model\\Object\\Class\\Data\\Geopolygon             | google maps widget to define a geographical area                                                                                                                                                                                                                                                                                                                                                                                                                                |
| href                     | Pimcore\\Model\\Object\\Class\\Data\\Href                   | reference to a pimcore document, object or asset                                                                                                                                                                                                                                                                                                                                                                                                                                |
| image                    | Pimcore\\Model\\Object\\Class\\Data\\Image                  | drop area & preview for a pimcore asset                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| input                    | Pimcore\\Model\\Object\\Class\\Data\\Input                  | text input field                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| keyvalue                 | Pimcore\\Model\\Object\\Class\\Data\\KeyValue               | key/value pairs                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| language                 | Pimcore\\Model\\Object\\Class\\Data\\Language               | combo box with predefined language list from Zend_Locale                                                                                                                                                                                                                                                                                                                                                                                                                        |
| link                     | Pimcore\\Model\\Object\\Class\\Data\\Link                   | link selector with link target                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| multihref                | Pimcore\\Model\\Object\\Class\\Data\\Multihref              | collection of references to pimcore documents, objects, assets                                                                                                                                                                                                                                                                                                                                                                                                                  |
| multiselect              | Pimcore\\Model\\Object\\Class\\Data\\Multiselect            | combo box with multiple select                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| nonownerobjects          | Pimcore\\Model\\Object\\Class\\Data\\Nonownerobjects        | object relations which are owned by a different object                                                                                                                                                                                                                                                                                                                                                                                                                          |
| numeric                  | Pimcore\\Model\\Object\\Class\\Data\\Numeric                | spinner field for number input                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| objects                  | Pimcore\\Model\\Object\\Class\\Data\\Objects                | collection of pimcore object references                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| password                 | Pimcore\\Model\\Object\\Class\\Data\\Password               | password field                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| select                   | Pimcore\\Model\\Object\\Class\\Data\\Select                 | combo box                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| slider                   | Pimcore\\Model\\Object\\Class\\Data\\Slider                 | number input with slider widget (min - max slider)                                                                                                                                                                                                                                                                                                                                                                                                                              |
| table                    | Pimcore\\Model\\Object\\Class\\Data\\Table                  | table input                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| textarea                 | Pimcore\\Model\\Object\\Class\\Data\\Textarea               | textarea                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| wysiwyg                  | Pimcore\\Model\\Object\\Class\\Data\\Wysiwyg                | text area with formatting options through a WYSIWYG editor                                                                                                                                                                                                                                                                                                                                                                                                                      |
| user                     | Pimcore\\Model\\Object\\Class\\Data\\User                   | combo box to select from all existing pimcore users (available since build 716) </br></br>In the user settings the object dependencies of each user are shown in the second tab panel.</br>All objects which reference the selected user are listed in a grid view.</br></br>If one needs to find out which objects hold a reference to a specific user, the ```Pimcore\\Tool\\Admin::getObjectsReferencingUser($userId)``` method can be used to find all referencing objects. |

All data types are wrapped in an object derived from ```Pimcore\Model\Object\Class\Data```. 
These data type objects provide getters and setters and they define the input widget in the frontend. 
Data type objects are displayed in the first column of the table above. 
The second column indicates the underlying data type class and the third column outlines the input widget used in pimcore to fill in, edit and display data objects.

## More advanced topics:

| Topic                                                                                                                   | description                                                               |
|-------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------|
| [Structured_Data_Fields](./Object_Classes/Structured_Data_Fields/_index.md)                                             | Learn more about Fieldcollections, Objectbricks and Structured tables     |
| [Localized Fields](./Object_Classes/Localized_Fields.md)                                                                | Multilanguage feature in object attributes.                               |
| [Classification Store](./Object_Classes/Structured_Data_Fields/Classification_Store.md)                                 |                                                                           |
| [Blocks](./Object_Classes/Structured_Data_Fields/Blocks.md)                                                             | The block datatype acts as a simple container for other data fields.      |
