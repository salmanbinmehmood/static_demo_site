import os
from PIL import Image

def compress_images(input_folder, output_folder, quality=50):
    if not os.path.exists(output_folder):
        os.makedirs(output_folder)










    for filename in os.listdir(input_folder):
        if filename.lower().endswith(('png', 'jpg', 'jpeg', 'tiff', 'bmp', 'gif','webp', 'avif')):
            input_path = os.path.join(input_folder, filename)
            output_path = os.path.join(output_folder, os.path.splitext(filename)[0] + '.webp')

            try:
                with Image.open(input_path) as img:
                    if img.mode in ('RGBA', 'LA') or (img.mode == 'P' and 'transparency' in img.info):
                        img = img.convert('RGBA')
                    else:
                        img = img.convert('RGB')
                    
                    img.save(output_path, 'webp', quality=quality, optimize=True)
                    print(f'Compressed and converted {filename} to {output_path}')
            except Exception as e:
                print(f'Error processing {filename}: {e}')

if __name__ == '__main__':
    script_dir = os.path.dirname(os.path.abspath(__file__))
    input_folder = script_dir  # The script will use its own directory as the input folder
    output_folder = os.path.join(script_dir, 'compressed')

    compress_images(input_folder, output_folder)


