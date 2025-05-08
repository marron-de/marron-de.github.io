import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import Select from "../components/Select";
import BigButton from "../components/BigButton";

// style
const AddPlan = styled.div`
  border: 1px solid var(--color-border2);
  border-radius: 10px;
  width: 100%;
  height: 200px;
  background: var(--color-white);
  margin-bottom: 5px;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-darkgray);
    background: var(--color-darkgray2);
  }
`;

const CreatePlan = () => {
  const [city, setCity] = useState("");
  const [name, setName] = useState("");

  const isButtonDisabled = () => {
    // 버튼 활성화 여부를 결정
    return city === "" || name === "";
  };

  const [imagePreview, setImagePreview] = useState(null);

  const handleFileChange = (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onloadend = () => {
        setImagePreview(reader.result);
      };
      reader.readAsDataURL(file);
    }
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create a Plan" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Where are you traveling?</InputTitle>
              <InputGroup>
                <Select value={city} onChange={(e) => setCity(e.target.value)}>
                  <option value="">Select a city...</option>
                  <option value="seoul">Seoul</option>
                  <option value="busan">Busan</option>
                  <option value="new_york">New York</option>
                  <option value="los_angeles">Los Angeles</option>
                  <option value="tokyo">Tokyo</option>
                  <option value="osaka">Osaka</option>
                  <option value="beijing">Beijing</option>
                  <option value="shanghai">Shanghai</option>
                  <option value="paris">Paris</option>
                  <option value="lyon">Lyon</option>
                  <option value="berlin">Berlin</option>
                  <option value="munich">Munich</option>
                  <option value="london">London</option>
                  <option value="manchester">Manchester</option>
                  <option value="mumbai">Mumbai</option>
                  <option value="delhi">Delhi</option>
                  <option value="sao_paulo">Sao Paulo</option>
                  <option value="rio_de_janeiro">Rio de Janeiro</option>
                  <option value="sydney">Sydney</option>
                  <option value="melbourne">Melbourne</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Plan name</InputTitle>
              <InputGroup>
                <Input placeholder="Please enter the plan name." type="text" icon="write" value={name} onChange={(e) => setName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Plan image</InputTitle>
              <AddPlan>
                <Form.Group controlId="formFile" className="file_box">
                  <Form.Label>
                    <span className="icon upload"></span>
                    <span className="txt">Upload Image</span>
                    {imagePreview && (
                      <div className="preview">
                        <img src={imagePreview} alt="Preview" className="file_img" />
                        <div className="btn_camera"></div>
                      </div>
                    )}
                  </Form.Label>
                  <Form.Control type="file" onChange={handleFileChange} />
                </Form.Group>
              </AddPlan>
              <InputGroup>
                <Form.Check type="checkbox" name="Check1" id="Check1" label="Make this thumbnail visible" className="check_ver" />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Plan theme (optional)</InputTitle>
              <InputGroup>
                <Form.Check type="radio" name="Check2" id="Check2-1" label="Eco/green tour" className="check_ver" />
                <Form.Check type="radio" name="Check2" id="Check2-2" label="Airport pickup" className="check_ver" />
                <Form.Check type="radio" name="Check2" id="Check2-3" label="Accomodation" className="check_ver" />
                <Form.Check type="radio" name="Check2" id="Check2-4" label="Send-off" className="check_ver" />
              </InputGroup>
            </Form.Group>
          </Form>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()}>Continue</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav active="create" />
    </>
  );
};

export default CreatePlan;
