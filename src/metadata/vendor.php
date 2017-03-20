<?php

return array (
    'package' => 'CAD',
    'tagline' => 'View, edit and get manufacturing prices for CAD designs.',
    'description' => 'Connect to the CAD.ai Manufacturing API to view, edit and get manufacturing prices for CAD designs. Test an API call and export the code snippet into your app.',
    'image' => 'https://logo.clearbit.com/cad.ai?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-CAD-Package',
    'keywords' => array (
            'API', 'CAD', 'CAM', 'CAD.ai',
        ),
    'accounts' => array (
            'domain' => 'cad.ai',
            'credentials' => array (
                'apiKey'
            ),
        ),
    'blocks' => array (
        array (
            'name' => 'fixCADFiles',
            'description' => 'Fix your CAD files and get them ready for additive or subtractive manufacturing.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for fix.',
                    'required' => true,
                ),
            ),
        ),
        /*
        array (
            'name' => 'getCADModelParameters',
            'description' => 'Get information about 3D file, like boxarea, volume, xCenter, yCenter, zCenter.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for fix.',
                    'required' => true,
                ),
                array (
                    'name' => 'unit',
                    'type' => 'String',
                    'info' => 'Unit of the design. One of: mm, in.',
                    'required' => true,
                ),
            ),
        ),
        */
        array (
            'name' => 'editCADModel',
            'description' => 'Allows you to rotate, mirror, scale your model.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for transform.',
                    'required' => true,
                ),
                array (
                    'name' => 'scaleFactor',
                    'type' => 'String',
                    'info' => 'Scale factor.',
                    'required' => true,
                ),
                array (
                    'name' => 'xyMirror',
                    'type' => 'Boolean',
                    'info' => 'Mirror the mesh about XY plane.',
                    'required' => true,
                ),
                array (
                    'name' => 'yzMirror',
                    'type' => 'Boolean',
                    'info' => 'Mirror the mesh about YZ plane.',
                    'required' => true,
                ),
                array (
                    'name' => 'xzMirror',
                    'type' => 'Boolean',
                    'info' => 'Mirror the mesh about XZ plane.',
                    'required' => true,
                ),
                array (
                    'name' => 'xRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the x axis by the given number of degrees.',
                    'required' => false,
                ),
                array (
                    'name' => 'yRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the y axis by the given number of degrees.',
                    'required' => false,
                ),
                array (
                    'name' => 'zRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the z axis by the given number of degrees.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'generateThumbnailFromCADFile',
            'description' => 'Generate thumbnail images of any sizes from a given 3D file.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for fix.',
                    'required' => true,
                ),
                array (
                    'name' => 'width',
                    'type' => 'Number',
                    'info' => 'Width of the image.',
                    'required' => true,
                ),
                array (
                    'name' => 'height',
                    'type' => 'Number',
                    'info' => 'Height of the image.',
                    'required' => true,
                ),
                array (
                    'name' => 'xRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the x axis by the given number of degrees.',
                    'required' => false,
                ),
                array (
                    'name' => 'yRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the y axis by the given number of degrees.',
                    'required' => false,
                ),
                array (
                    'name' => 'zRotateAngle',
                    'type' => 'Number',
                    'info' => 'Angle to rotate the entire mesh about the z axis by the given number of degrees.',
                    'required' => false,
                ),
            ),
        ),
        /*
        array (
            'name' => 'convertCADFile',
            'description' => 'Convert any of the 51 supported formats into .stl, .obj, .dae or .ply formats.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for fix.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileFormat',
                    'type' => 'String',
                    'info' => 'File format to convert file into. One of: .stl, .dae, .ply, .obj.',
                    'required' => true,
                ),
            ),
        ),
        */
        array (
            'name' => 'get3DPrintingMaterials',
            'description' => 'Return list of materials types.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'get3DModelPrintPrice',
            'description' => 'Query the price that would be billed to 3D print a given design.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your Public key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fileUrl',
                    'type' => 'String',
                    'info' => 'Flle url for fix.',
                    'required' => true,
                ),
                array (
                    'name' => 'material',
                    'type' => 'String',
                    'info' => 'One of material types.',
                    'required' => true,
                ),
                array (
                    'name' => 'unit',
                    'type' => 'String',
                    'info' => 'Unit of the design. One of: mm, in.',
                    'required' => false,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency in which price is returned. One of: EUR, USD.',
                    'required' => false,
                ),
            ),
        ),
    ),
    'custom' => array (
        'fixCADFiles' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/repairfile',
            'method' => 'POST',
        ),
        /*
        'getCADModelParameters' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
                'unit' => 'unit',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/fileinfo',
            'method' => 'POST',
        ),
        */
        'editCADModel' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
                'scaleFactor' => 'scale_factor',
                'xyMirror' => 'xy_mirror',
                'yzMirror' => 'yz_mirror',
                'xzMirror' => 'xz_mirror',
                'xRotateAngle' => 'x_rotate_angle',
                'yRotateAngle' => 'y_rotate_angle',
                'zRotateAngle' => 'z_rotate_angle',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/fileinfo',
            'method' => 'POST',
        ),
        'generateThumbnailFromCADFile' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
                'width' => 'width',
                'height' => 'height',
                'xRotateAngle' => 'x_rotate_angle',
                'yRotateAngle' => 'y_rotate_angle',
                'zRotateAngle' => 'z_rotate_angle',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/thumbnail',
            'method' => 'POST',
        ),
        /*
        'convertCADFile' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
                'fileFormat' => 'file_format',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/convertfile',
            'method' => 'POST',
        ),
        */
        'get3DPrintingMaterials' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/materials/types',
            'method' => 'POST-NO-CACHE',
        ),
        'get3DModelPrintPrice' => array (
            'dictionary' => array (
                'apiKey' => 'apiKey',
                'fileUrl' => 'file_url',
                'material' => 'material',
                'unit' => 'unit',
                'currency' => 'currency',
            ),
            'vendorUrl' => 'https://api.cad.ai/api/v1/query',
            'method' => 'POST',
        ),
    ),
);