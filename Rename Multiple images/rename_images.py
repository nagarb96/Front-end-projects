import os

def rename_images(folder_path):
    # List all files in the directory
    files = os.listdir(folder_path)
    
    # Filter out only image files (you can adjust this filter based on your needs)
    image_files = [f for f in files if f.endswith(('.png', '.jpg', '.jpeg', '.gif', '.bmp'))]

    # Sort files (optional, based on the order you want)
    image_files.sort()

    # Rename each file
    for index, file in enumerate(image_files, start=1):
        # Get the file extension
        file_extension = os.path.splitext(file)[1]
        
        # Construct the new file name
        new_name = f"{index}{file_extension}"
        
        # Construct the full file paths
        old_path = os.path.join(folder_path, file)
        new_path = os.path.join(folder_path, new_name)
        
        # Rename the file
        os.rename(old_path, new_path)

    print("Renaming completed.")

# Example usage
folder_path = r'C:\Users\Brijesh Kumar\Desktop\Office Work\July 2024\July 2024\Miramar'  # Change this to your folder path
rename_images(folder_path)
