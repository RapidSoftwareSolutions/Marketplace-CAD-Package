[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/CAD/functions?utm_source=RapidAPIGitHub_CADFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# CAD Package
Connect to the CAD.ai Manufacturing API to view, edit and get manufacturing prices for CAD designs. Test an API call and export the code snippet into your app.
* Domain: [cad.ai](https://cad.ai/)
* Credentials: apiKey

## How to get credentials: 
0. Sign up in [CAD.ai](https://dashboard.cad.ai/register), and verify your email. 
1. Navigate to [Settings/API Keys](http://dashboard.cad.ai/dashboard).
2. Use Public key as apiKey credentials.

## CAD.fixCADFiles
Fix your CAD files and get them ready for additive or subtractive manufacturing.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your Public key.
| fileUrl| String     | Flle url for fix.

## CAD.editCADModel
Allows you to rotate, mirror, scale your model.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your Public key.
| fileUrl     | String     | Flle url for transform.
| scaleFactor | String     | Scale factor.
| xyMirror    | Boolean    | Mirror the mesh about XY plane.
| yzMirror    | Boolean    | Mirror the mesh about YZ plane.
| xzMirror    | Boolean    | Mirror the mesh about XZ plane.
| xRotateAngle| Number     | Angle to rotate the entire mesh about the x axis by the given number of degrees.
| yRotateAngle| Number     | Angle to rotate the entire mesh about the y axis by the given number of degrees.
| zRotateAngle| Number     | Angle to rotate the entire mesh about the z axis by the given number of degrees.

## CAD.generateThumbnailFromCADFile
Generate thumbnail images of any sizes from a given 3D file.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your Public key.
| fileUrl     | String     | Flle url for fix.
| width       | Number     | Width of the image.
| height      | Number     | Height of the image.
| xRotateAngle| Number     | Angle to rotate the entire mesh about the x axis by the given number of degrees.
| yRotateAngle| Number     | Angle to rotate the entire mesh about the y axis by the given number of degrees.
| zRotateAngle| Number     | Angle to rotate the entire mesh about the z axis by the given number of degrees.

## CAD.get3DPrintingMaterials
Return list of materials types.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your Public key.

## CAD.get3DModelPrintPrice
Query the price that would be billed to 3D print a given design.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your Public key.
| fileUrl | String     | Flle url for fix.
| material| String     | One of material types.
| unit    | String     | Unit of the design. One of: mm, in.
| currency| String     | Currency in which price is returned. One of: EUR, USD.

